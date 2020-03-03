PROGRAM Greeting(INPUT, OUTPUT);
USES DOS;
VAR
  query, parameter, substring: STRING;
  i, n: integer;
BEGIN 
  WRITELN;
  query := GetEnv('QUERY_STRING');
  substring := copy(query, 1, 5);
  IF substring = 'name='
  THEN
    BEGIN
      i := pos('&', query);
      IF i <> 0
      THEN
        parameter := copy(query, 6, i - 6)
      ELSE
        parameter := copy(query, 6, length(query));
      WRITELN('Hello dear, ', parameter, '!')
    END
  ELSE    
    BEGIN
      i := pos('&name=', query);
      IF i <> 0
      THEN
        BEGIN
          substring := copy(query, i + 6, length(query) - i + 1);
          i := pos('&', substring);
          IF i <> 0
          THEN
            parameter := copy(substring, 1, i - 1)
          ELSE
            parameter := substring;
          WRITELN('Hello dear, ', parameter, '!')
        END
      ELSE
        WRITELN('Hello Anonymous!')
    END
END.