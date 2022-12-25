set current_path=%~dp0

start %current_path %apache_stop.bat
start %current_path %mysql_stop.bat
start %current_path %dslan_stop.exe
