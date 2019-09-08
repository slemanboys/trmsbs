#!python
#!C:\Python37\python.exe

import subprocess

# if the script don't need output.
subprocess.call("php src/tira.py")

# if you want output
proc = subprocess.Popen("php src/tira.py", shell=True, stdout=subprocess.PIPE)
script_response = proc.stdout.read()