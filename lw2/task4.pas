PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES DOS;

FUNCTION GetQueryStringParameter(key: STRING): STRING;
VAR
  query, parameter, substring: STRING;
  i, n: integer;
  flag: CHAR;
BEGIN
  query := GetEnv('QUERY_STRING');
  flag := '0';
  i := pos('&', query);
  {WRITELN('position of key in query ', i);}
  WHILE (i <> 0) AND (flag = '0')
  DO
    BEGIN
      n := pos('=', query);
      substring := copy(query, 1, n - 1);
      IF substring = key
      THEN
        BEGIN
          flag := '1';
          parameter := copy(query, n + 1, i - 1)
        END;
      query := copy(query, i + 1, length(query);
      i := pos('&', query)
    END;
  IF (i = '0') AND (flag = 0)
  THEN
    BEGIN
      n := pos('=', query);
      IF n <> 0
      THEN
        BEGIN
          substring := copy(query, 1, n - 1);
          IF substring = key
          THEN
            BEGIN
              flag := '1';
              parameter := copy(query, n + 1, length(query))
            END
        END
    END;
  IF flag = '0'
  THEN
    parameter := 'the key has not been found';
  GetQueryStringParameter := parameter
END;

BEGIN {WorkWithQueryString}
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}