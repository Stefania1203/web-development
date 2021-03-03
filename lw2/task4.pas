PROGRAM HelloDear(INPUT, OUTPUT);
USES
  DOS;
VAR
  Ch: CHAR;
  S, QS: STRING;
BEGIN 
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QS := getenv('QUERY_STRING');
  IF (POS('name=', QS) > 0) AND (LENGTH(QS) > 5)
  THEN
    BEGIN
      S := COPY(QS, POS('name=', QS) + 5, 255);     
      IF POS('&', S) > 0
      THEN
        S := COPY(S, 1, POS('&', S) - 1);
      WRITELN('Hello dear, ', S, '!')
    END
  ELSE
    WRITELN('Hello Anonymous!');      
END. 

