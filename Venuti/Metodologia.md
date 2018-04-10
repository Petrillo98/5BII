# Il progetto e la sua realizzazione

Il progetto ha seguito una metodologia di sviluppo a prototipazione rapida.

## Lato server: Le fasi principali

1. Un primo prototipo è stata realizzato per capire se tutte le singole parti del prodotto potevano integrarsi. Un file XML è stato generato in maniera dinamica leggendo il contenuto da DB. Tale file è stato messo su file system e successivamente letto da una pagina contenente una mappa Google Map
1. Realizzata un'appropriata interfaccia grafica, presa da un (template) [http://ahmedessa.net/box/] 
1. Un secondo prototipo ha sostituito la generazione del file in uno script che, interrogato con un'opportuna query string, generava la porzione XML di interesse. La pagina con la Google Map interroga tale script
1. In fase di creazione una pagina che legge i valori dalla query string e li inserisce come record su DB
1. Usato uno script per la generazione di immagini contenenti QR Code (PHP QR Code)[http://phpqrcode.sourceforge.net/]
## Lato client: Le fasi principali

1. Creata un'App che mostra le coordinate a video
1. Modificata affinché le coordinate visualizzate cambino non appena vengono recuperate coordinate aggiornate
1. Creato un lettore di QR Code per recuperare i dati dell'atleta
