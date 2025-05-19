# Turni Script

Questo script genera un calendario di turni in base alle date di inizio e fine
fornite, al numero di gruppi e al gruppo che deve iniziare il primo giorno. Il
risultato viene salvato in un file JSON.

## Struttura del Progetto

```
turni/
├── main.py              # Entry point del programma, contiene il main.
├── params.py            # Gestisce l'analisi e la validazione dei parametri.
└── turni.py             # Contiene la logica per la gestione dei turni.
```

### Descrizione delle Classi e Funzioni

#### `params.py`

- **`parse_args()`**: Gestisce il parsing degli argomenti da linea di comando.
- **`validate_and_process_args(args)`**: Valida gli argomenti forniti
  dall'utente e li converte nei formati corretti. Se ci sono errori, solleva
  un'eccezione.

#### `turni.py`

- **`Turni`**: La classe principale che si occupa di generare e gestire i turni.

  * **`__init__(self, number_of_groups)`**: Inizializza la classe con il numero
    di gruppi e un dizionario vuoto per memorizzare i turni.
  * **`load(self, start_date, end_date, start_group)`**: Carica i turni,
    iterando tra le date e assegnando i giorni ai gruppi.
  * **`to_json(self, target_path='/tmp/turni.json')`**: Esporta i turni in
    formato JSON nel file specificato.
  * **`_has_date_key(self, target_group, target_date)`**: Verifica se una data
    è già presente per un determinato gruppo.
  * **`_add_date_key(self, target_group, target_date)`**: Aggiunge una chiave
    per una data nel dizionario.
  * **`_add_day(self, target_group, target_date)`**: Aggiunge un giorno per il
    gruppo corrente.
  * **`_get_date_key(self, target_date)`**: Restituisce una stringa formattata
    che rappresenta la data in "YYYY-MM".
  * **`_get_next_date(self, target_date)`**: Restituisce la data successiva.
  * **`_get_next_group(self, current_group)`**: Calcola il gruppo successivo.

#### `main.py`

* Punto di ingresso del programma, gestisce il flusso principale e richiama le
  funzioni di `params.py` e `turni.py`.


## Installazione

1. Clona il repository o scarica il codice sorgente.
2. Assicurati di avere Python 3.x installato.


## Esecuzione

Per eseguire lo script, usa la seguente sintassi dalla linea di comando:

```bash
python main.py -b <begin-date> -e <end-date> -n <number-of-groups> -s <group-begin>
```

Dove:

* `-b <begin-date>`: Data di inizio dell'intervallo (formato: `YYYY-MM-DD`).
* `-e <end-date>`: Data di fine dell'intervallo (formato: `YYYY-MM-DD`).
* `-n <number-of-groups>`: Numero di gruppi da assegnare.
* `-s <group-begin>`: Numero del gruppo da assegnare per il primo giorno (deve
  essere tra 1 e `number-of-groups`).

### Esempio 1: Generazione di turni da gennaio 2025 a marzo 2025 per 6 gruppi, iniziando con il gruppo 1

```bash
python main.py -b 2025-01-01 -e 2025-03-31 -n 6 -s 1
```

Questo comando genererà i turni per il periodo dal 1° gennaio 2025 al 31 marzo
2025, assegnando 6 gruppi e iniziando con il gruppo 1.

### Esempio 2: Generazione di turni per 4 gruppi, iniziando con il gruppo 3

```bash
python main.py -b 2025-02-01 -e 2025-02-28 -n 4 -s 3
```

Questo comando genera turni per il mese di febbraio 2025, con 4 gruppi e il
gruppo 3 che inizia il 1° febbraio.


## Output

I turni generati vengono salvati in un file JSON. Puoi specificare il percorso
del file JSON tramite il parametro `target_path` della funzione `to_json()`. Il
percorso di default è `/tmp/turni.json`.

Un esempio di file JSON risultante:

```json
{
  "1": {
    "2025-01": [1, 7, 13, 19, 25],
    "2025-02": [1, 7, 13, 19, 25],
    "2025-03": [1, 7, 13, 19, 25]
  },
  "2": {
    "2025-01": [2, 8, 14, 20, 26],
    "2025-02": [2, 8, 14, 20, 26],
    "2025-03": [2, 8, 14, 20, 26]
  },
  "3": {
    "2025-01": [3, 9, 15, 21, 27],
    "2025-02": [3, 9, 15, 21, 27],
    "2025-03": [3, 9, 15, 21, 27]
  },
  "4": {
    "2025-01": [4, 10, 16, 22, 28],
    "2025-02": [4, 10, 16, 22, 28],
    "2025-03": [4, 10, 16, 22, 28]
  }
}
```


## Contributi

Se vuoi contribuire, apri una **pull request** con i tuoi miglioramenti.


## Licenza

Questo progetto è sotto licenza GPL-3.0.

