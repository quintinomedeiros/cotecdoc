@echo off

REM Configurações do banco de dados
set DB_USER=admin
set DB_PASSWORD=admin
set DB_NAME=cotecdoc

REM Exporta o banco de dados
"C:\xampp\mysql\bin\mysqldump.exe" -u"%DB_USER%" -p"%DB_PASSWORD%" "%DB_NAME%" > database_dump.sql

REM Adiciona e faz commit do dump
git add database_dump.sql
git commit -m "Atualizar dump do banco de dados"

REM Faz push para o GitHub
git push origin main
