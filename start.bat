REM This is just a development script that
REM opens visual studio code,
REM the commmand prompt,
REM the file explorer,
REM and MAMP.
@echo off
%SystemRoot%\explorer.exe %~dp0
start C:\MAMP\MAMP.exe
start cmd
code "%cd%"