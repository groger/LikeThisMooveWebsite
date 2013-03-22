  <?php
							  /*$code = "r9ChaIFTXMY";
							  // Get video feed info (xml) from youtube, but only the title | http://php.net/manual/en/function.file-get-contents.php
							  $video_feed = file_get_contents("http://gdata.youtube.com/feeds/api/videos?v=2&q=".$code."&max-results=1&fields=entry(title)&prettyprint=true");
							  // xml to object | http://php.net/manual/en/function.simplexml-load-string.php
							  $video_obj = simplexml_load_string($video_feed);
							  // Get the title string to a variable
							  $video_str = $video_obj->entry->title;
							  // Output
							  print("<h3>titre: $video_str.</h3>");
							  //echo $video_str;*/
							  
/*********************youtube function to get youtube ID***********************/

	  function getYoutubeId($ytURL) 
		  {
			  $urlData = parse_url($ytURL);
			  //echo '<br>'.$urlData["host"].'<br>';
			  if($urlData["host"] == 'www.youtube.com') // Check for valid youtube url
			  {
				  $ytvIDlen = 11;	// This is the length of YouTube's video IDs
   
				  // The ID string starts after "v=", which is usually right after 
				  // "youtube.com/watch?" in the URL
				  $idStarts = strpos($ytURL, "?v=");
   
				  // In case the "v=" is NOT right after the "?" (not likely, but I like to keep my 
				  // bases covered), it will be after an "&":
				  if($idStarts === FALSE)
					  $idStarts = strpos($ytURL, "&v=");
				  // If still FALSE, URL doesn't have a vid ID
				  if($idStarts === FALSE)
					  die("YouTube video ID not found. Please double-check your URL.");
   
				  // Offset the start location to match the beginning of the ID string
				  $idStarts +=3;
   
				  // Get the ID string and return it
				  $ytvID = substr($ytURL, $idStarts, $ytvIDlen);
   
				  return $ytvID;
			  }
			  else
			  {
				  //echo 'This is not a valid youtube video url. Please, give a valid url...';
				  return 0;
			  }
   
		  }
	 
	 
	  /**********************function to parse a video <entry>**********************************/
	  
	  function parseVideoEntry($youtubeVideoID) 
	  {      
		$obj= new stdClass;
		
		// set video data feed URL
		  $feedURL = 'http://gdata.youtube.com/feeds/api/videos/' . $youtubeVideoID;
  
		  // read feed into SimpleXML object
		  $entry = simplexml_load_file($feedURL);
		
		// get nodes in media: namespace for media information
		$media = $entry->children('http://search.yahoo.com/mrss/');
		$obj->title = $media->group->title;
		$obj->description = $media->group->description;
		
		// get video player URL
		$attrs = $media->group->player->attributes();
		$obj->watchURL = $attrs['url']; 
		
		// get video thumbnail
		$attrs = $media->group->thumbnail[0]->attributes();
		$obj->thumbnailURL = $attrs['url']; 
			  
		// get <yt:duration> node for video length
		$yt = $media->children('http://gdata.youtube.com/schemas/2007');
		$attrs = $yt->duration->attributes();
		$obj->length = $attrs['seconds']; 
		
		// get <yt:stats> node for viewer statistics
		$yt = $entry->children('http://gdata.youtube.com/schemas/2007');
		$attrs = $yt->statistics->attributes();
		$obj->viewCount = $attrs['viewCount']; 
		
		// get <gd:rating> node for video ratings
		$gd = $entry->children('http://schemas.google.com/g/2005'); 
		if ($gd->rating) { 
		  $attrs = $gd->rating->attributes();
		  $obj->rating = $attrs['average']; 
		} else {
		  $obj->rating = 0;         
		}
		  
		// get <gd:comments> node for video comments
		$gd = $entry->children('http://schemas.google.com/g/2005');
		if ($gd->comments->feedLink) { 
		  $attrs = $gd->comments->feedLink->attributes();
		  $obj->commentsURL = $attrs['href']; 
		  $obj->commentsCount = $attrs['countHint']; 
		}
  
		return $obj;      
	  } 

/************************************function to print youtube video info*****************************/

	   function printYoutubeInfo($youtubeVideoLink) 
	  {
							  //$youtubeVideoLink = ‘http://tutsbucket.com/2010/11/css3-drop-down-menu/&#8217;;
							  $videoId = getYoutubeId($youtubeVideoLink);
							  
							  if($videoId == '0')
							  {
							  echo "This is not a valid youtube video url. Please, give a valid url…";
							  }
							  else
							  {
							  $videoInfo = parseVideoEntry($videoId);
							  
							  // display main video record
							  /*echo "<br><br><table>\n";
							  echo "<tr>\n";
							  echo "<td><a href=\"{$videoInfo->watchURL}\">
							  <img src=\"$videoInfo->thumbnailURL\"/></a></td>\n";
							  echo "<td><a href=\"{$videoInfo->watchURL}\">{$videoInfo->title}</a>
							  <br/>\n";
							  echo sprintf("%0.2f", $videoInfo->length/60) . " min. | {$videoInfo->rating}
							  user rating | {$videoInfo->viewCount} views<br/>\n";
							  echo $videoInfo->description . "</td>\n";
							  echo "</tr>\n";*/
							  //echo "</table>";
							  
							  //echo ‘<br><br>’;
							  // read ‘video comments’ feed into SimpleXML object
							  // parse and display each comment
							  if ($videoInfo->commentsURL && $videoInfo->commentsCount > 0)
							  {
							  $commentsFeed = simplexml_load_file($videoInfo->commentsURL);
							  /*echo "<tr><td colspan=\"2\"><h3>" . $commentsFeed->title .
							  "</h3></td></tr>\n";
							  echo "<tr><td colspan=\"2\"><ol>\n";*/
							  foreach ($commentsFeed->entry as $comment)
							  {
							  echo "<li>" . $comment->content . "</li>\n";
							  }
							  //echo "</ol></td></tr>\n";
							  }
							  //echo "</table>";
							  
							  /*echo "<h2>Basic Video Information</h2>";
							  echo "<br>";*/
							  echo "<div class=\"video_t\"><h4>".$videoInfo->title."</h4></div>";					
							  /*echo "<b>Thumbnail link of video:</b> ".$videoInfo->thumbnailURL;
							  echo "<br><br>";
							  echo "<b>Youtube video link:</b> ".$videoInfo->watchURL;
							  echo "<br><br>";*/
							  echo "<div class=\"description\"><b>".$videoInfo->description."</b></div>";
							  echo "<br><br>";
							  /*echo "<b>How many times video have seen:</b> ".$videoInfo->viewCount;
							  echo "<br><br>";
							  echo "<b>Video length(in seconds):</b> ".$videoInfo->length;
							  echo "<br><br>";
							  echo "<b>Video rating:</b> ".$videoInfo->rating;*/
							  }
	  }
	  
	  /*****************************youtube function to go from URL to embed code**********************************/
	  
	  					function youtubeEmbedFromUrl($youtube_url, $width, $height){
						$vid_id = extractUTubeVidId($youtube_url);
						return generateYoutubeEmbedCode($vid_id, $width, $height);
					}
					 
					function extractUTubeVidId($url){
						/*
						* type1: http://www.youtube.com/watch?v=H1ImndT0fC8
						* type2: http://www.youtube.com/watch?v=4nrxbHyJp9k&feature=related
						* type3: http://youtu.be/H1ImndT0fC8
						*/
						$vid_id = "";
						$flag = false;
						if(isset($url) && !empty($url)){
							/*case1 and 2*/
							$parts = explode("?", $url);
							if(isset($parts) && !empty($parts) && is_array($parts) && count($parts)>1){
								$params = explode("&", $parts[1]);
								if(isset($params) && !empty($params) && is_array($params)){
									foreach($params as $param){
										$kv = explode("=", $param);
										if(isset($kv) && !empty($kv) && is_array($kv) && count($kv)>1){
											if($kv[0]=='v'){
												$vid_id = $kv[1];
												$flag = true;
												break;
											}
										}
									}
								}
							}
							
							/*case 3*/
							if(!$flag){
								$needle = "youtu.be/";
								$pos = null;
								$pos = strpos($url, $needle);
								if ($pos !== false) {
									$start = $pos + strlen($needle);
									$vid_id = substr($url, $start, 11);
									$flag = true;
								}
							}
						}
						return $vid_id;
					}
					 
					function generateYoutubeEmbedCode($vid_id, $width, $height){
						$w = $width;
						$h = $height;
						$html = '<iframe width="'.$w.'" height="'.$h.'" src="http://www.youtube.com/embed/'.$vid_id.'?rel=0" frameborder="0" allowfullscreen></iframe>';
						return $html;
					}
  
  ?>