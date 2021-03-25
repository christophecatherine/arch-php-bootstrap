# Petit rappel

Il y a 2 script sql:
  - create_user.sql
  - tuto_php_bootstrap.sql

Le premier (create_user.sql)(admin) est pour creer un user (tuto@localhost) dans votre base de données MySQL installer sur votre machine, et lui attribuer le droit sur toutes les bases de données.

Le Deuxieme (tuto_php_bootstrap.sql)(test) quand à lui à pour objectif de créer votre architecture de base de données avec ses types, class, ...

Pour executer les scripts:
```
cd arch_php_bootstrap
sudo mysql
```
Une fois de le terminal de MySql ou MariaDB
```
source db/create_user.sql
```