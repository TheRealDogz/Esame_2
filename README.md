# Esame Filippo Canino

Esame 07/02/2022
Filippo Canino

# Installazione

1. Clonare la repository

```
git clone https://github.com/TheRealDogz/Esame_2
```

# Installazione Client

1. Entrare nella cartella `/client` e installare tutte le dipendenze:

```
npm install
```

2. Serve

```
npn run serve
```

# Collegamento DB

Nella cartella `/server` cercare il file `.env.example`
Creare file `.env` uguale al file `.env.example`, e modificare il nome del database **DB_DATABASE = nome_db**

# Installazione Server

1. Entrare nella cartella `/server` e installare tutte le dipendenze:

```
composer update
```

2. Migrazioni (creazione delle tabelle e struttura del database):

```
php artisan migrate
```

3. Serve

```
php artisan serve
```

# Route Client

const routes = [
{
path: '',
redirect: '/home'
},
{
path: '/home',
name: 'home',
component: Home
},
{
path: '/detail/:id',
name: 'detail',
component: Detail
},
{
path: '/create',
name: 'create',
component: AddInhabitant
},
{
path: '/edit/:id',
name: 'edit',
component: AddInhabitant
}
]

# Route Api

Route::get('/inhabitants', [inhabitantsController::class, 'list']);
Route::get('/inhabitants/{id}', [inhabitantsController::class, 'detail']);
Route::post('/inhabitants', [inhabitantsController::class, 'create']);
Route::put('/inhabitants/{id}', [inhabitantsController::class, 'modify']);
Route::delete('/inhabitants/{id}', [inhabitantsController::class, 'delete']);

# Tabelle create

1. inhabitants
   Schema::create('inhabitant', function (Blueprint $table) {
   $table->id();
   $table->text("nome");
   $table->text("foto");
   $table->text("comune");
   $table->text("provincia");
   $table->text("indirizzo");
   $table->text("CAP");
   $table->text("nApp");
   $table->text("uc");
   $table->boolean("remota");
   $table->text("contab");
   $table->text("sonda");
   $table->text("dispositivi");
   $table->text("timestamps");
   });
