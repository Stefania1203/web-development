PROGRAM PaulRevere(INPUT, OUTPUT);
USES
  DOS;
VAR
  QS: STRING;
BEGIN {PaulRevere}
  {Read Lanterns}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QS := getenv('QUERY_STRING');
  {Issue Paul Revere's message}
  IF QS = 'lanterns=1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF QS = 'lanterns=2'
    THEN
      WRITELN('The British are coming by sea.')
    ELSE
      WRITELN('Paul didn''t say')
END. {PaulRevere}

