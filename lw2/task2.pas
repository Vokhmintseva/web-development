PROGRAM SarahRever(INPUT, OUTPUT);
USES DOS;
VAR
  query: string;
BEGIN
  WRITELN;
  query := GetEnv('QUERY_STRING');
  IF pos('lanterns=1', query) <> 0
  THEN
    WRITELN('The British are coming by land')
  ELSE
    IF pos('lanterns=2', query) <> 0
    THEN
      WRITELN('The British are coming by sea')
    ELSE
      WRITELN(query);
END.