PROGRAM HttpResponse(INPUT, OUTPUT);
USES
  Dos;
BEGIN {PrintEnv}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('REQUEST_METHOD: ', getenv('REQUEST_METHOD'));
  WRITELN('QUERY_STRING: ', getenv('QUERY_STRING'));
  WRITELN('CONTENT_LENGTH: ', getenv('CONTENT_LENGTH'));
  WRITELN('HTTP_USER_AGENT: ', getenv('HTTP_USER_AGENT'));
  WRITELN('HTTP_HOST: ', getenv('HTTP_HOST'))
END. {PrintEnv}
