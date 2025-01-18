$wgServer = "http://localhost:8080";
$wgArticlePath = "/wiki/$1";
$wgScriptPath = "";

wfLoadExtension( 'CommentStreams' );
wfLoadExtension( 'AntiSpoof' );
wfLoadExtension( 'CheckUser' );
$wgCommentStreamsAllowedNamespaces = [0];
$wgAllowDisplayTitle = true;
$wgRestrictDisplayTitle = false;

$wgShowExceptionDetails = true;