## composer create-project laravel/laravel:^9.2 NomeRepo // creazione della cartella di lavoro

# cd NomeRepo // entro nella cartella

# # code .  //avvio vs code dentro la cartella

# composer require pacificdev/laravel_9_preset  // installo il pachetto di fabio

# php artisan preset:ui bootstrap  // setto bootstrap

# npm i // istallo i pachett# i

# npm run dev // avvio il server di vue

# # php artisan serve  // avvio in un altra scheda del terminale il server di # php

# # php artisan make:model MyModel // comando per creare un modello

# # php artisan make:controller Folder/NomeController // comando per creare un controller

# php artisan db // comando per accedere al server
# php artisan tinker // comando per interagire col server


## Steps Migration/Seeder
# Collego il db

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=your_port_number
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=root
Effettuo le migrazioni presenti di default nell'app

# esegue le migrazioni ma se il db non esiste vi chiede se volete crearlo (sando nome nel DB_DATABASE)
# php artisan migrate
Creo modello per la mappatura della tabella del db

# php artisan make:model NomeModello #solo modello
# php artisan make:model NomeModello -ms #modello migrazione e seeder
-ms per generare migrazione e seeder collegati al modello

# Creo nuova tabella con migrazione usando convenzione create_nome_tabella_table
# php artisan make:migration create_NomeTabella_table
Aggiungere nuovo file di migrazione rispettando le convenzioni (under_score_case) per aggiungere una colonna a una tabella esistente

# php artisan make:migration add_nome_della_colonna_da_aggiungere_to_nome_tabella_table 
Ci crea un nuovo file di seeding per una tabella del db

# php artisan make:seeder NomeSeeder
Popola la tabella del db

# php artisan db:seed --class=SeederClassName
