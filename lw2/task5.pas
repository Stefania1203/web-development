PROGRAM GetPar(INPUT, OUTPUT);
USES
  DOS;
FUNCTION GetQueryStringParameter(Key: STRING): STRING;  
VAR
  S, QS: STRING;
BEGIN 
  QS := getenv('QUERY_STRING');
  IF POS(Key + '=', QS) > 0
  THEN
    BEGIN
      S := COPY(QS, POS(Key + '=', QS) + LENGTH(Key) + 1, 255);     
      IF POS('&', S) > 0
      THEN
        S := COPY(S, 1, POS('&', S) - 1);
      GetQueryStringParameter := S
    END
  ELSE
    GetQueryStringParameter := ''     
END;  
BEGIN 
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'));
  readln 
END. 


