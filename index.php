<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
        <!-- Descrizione:
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
        
    <!-- creo una variabile e gli passo una stringa -->
    <?php
        $discorso_Martin_Luther_King = '    
        Sono felice di unirmi a voi in questa che passerà alla storia come la più grande dimostrazione per la libertà nella storia del nostro paese. Cento anni fa un grande americano, alla cui ombra ci leviamo oggi, firmò il Proclama sull’Emancipazione. Questo fondamentale decreto venne come un grande faro di speranza per milioni di schiavi negri che erano stati bruciati sul fuoco dell’avida ingiustizia. Venne come un’alba radiosa a porre termine alla lunga notte della cattività.
        Ma cento anni dopo, il negro ancora non è libero; cento anni dopo, la vita del negro è ancora purtroppo paralizzata dai ceppi della segregazione e dalle catene della discriminazione; cento anni dopo, il negro ancora vive su un’isola di povertà solitaria in un vasto oceano di prosperità materiale; cento anni dopo; il negro langue ancora ai margini della società americana e si trova esiliato nella sua stessa terra.
        Per questo siamo venuti qui, oggi, per rappresentare la nostra condizione vergognosa. In un certo senso siamo venuti alla capitale del paese per incassare un assegno. Quando gli architetti della repubblica scrissero le sublimi parole della Costituzione e la Dichiarazione d’Indipendenza, firmarono un "pagherò" del quale ogni americano sarebbe diventato erede. Questo "pagherò" permetteva che tutti gli uomini, si, i negri tanto quanto i bianchi, avrebbero goduto dei principi inalienabili della vita, della libertà e del perseguimento della felicità.
        E’ ovvio, oggi, che l’America è venuta meno a questo "pagherò" per ciò che riguarda i suoi cittadini di colore. Invece di onorare questo suo sacro obbligo, l’America ha consegnato ai negri un assegno fasullo; un assegno che si trova compilato con la frase: "fondi insufficienti". Noi ci rifiutiamo di credere che i fondi siano insufficienti nei grandi caveau delle opportunità offerte da questo paese. E quindi siamo venuti per incassare questo assegno, un assegno che ci darà, a presentazione, le ricchezze della libertà e della garanzia di giustizia.
        Siamo anche venuti in questo santuario per ricordare all’America l’urgenza appassionata dell’adesso. Questo non è il momento in cui ci si possa permettere che le cose si raffreddino o che si trangugi il tranquillante del gradualismo. Questo è il momento di realizzare le promesse della democrazia; questo è il momento di levarsi dall’oscura e desolata valle della segregazione al sentiero radioso della giustizia.; questo è il momento di elevare la nostra nazione dalle sabbie mobili dell’ingiustizia razziale alla solida roccia della fratellanza; questo è il tempo di rendere vera la giustizia per tutti i figli di Dio. Sarebbe la fine per questa nazione se non valutasse appieno l’urgenza del momento. Questa estate soffocante della legittima impazienza dei negri non finirà fino a quando non sarà stato raggiunto un tonificante autunno di libertà ed uguaglianza.
        Il 1963 non è una fine, ma un inizio. E coloro che sperano che i negri abbiano bisogno di sfogare un poco le loro tensioni e poi se ne staranno appagati, avranno un rude risveglio, se il paese riprenderà a funzionare come se niente fosse successo.
        Non ci sarà in America né riposo né tranquillità fino a quando ai negri non saranno concessi i loro diritti di cittadini. I turbini della rivolta continueranno a scuotere le fondamenta della nostra nazione fino a quando non sarà sorto il giorno luminoso della giustizia.
        Ma c’è qualcosa che debbo dire alla mia gente che si trova qui sulla tiepida soglia che conduce al palazzo della giustizia. In questo nostro procedere verso la giusta meta non dobbiamo macchiarci di azioni ingiuste.
        Cerchiamo di non soddisfare la nostra sete di libertà bevendo alla coppa dell’odio e del risentimento. Dovremo per sempre condurre la nostra lotta al piano alto della dignità e della disciplina. Non dovremo permettere che la nostra protesta creativa degeneri in violenza fisica. Dovremo continuamente elevarci alle maestose vette di chi risponde alla forza fisica con la forza dell’anima.
        Questa meravigliosa nuova militanza che ha interessato la comunità negra non dovrà condurci a una mancanza di fiducia in tutta la comunità bianca, perché molti dei nostri fratelli bianchi, come prova la loro presenza qui oggi, sono giunti a capire che il loro destino è legato col nostro destino, e sono giunti a capire che la loro libertà è inestricabilmente legata alla nostra libertà. Questa offesa che ci accomuna, e che si è fatta tempesta per le mura fortificate dell’ingiustizia, dovrà essere combattuta da un esercito di due razze. Non possiamo camminare da soli.
        E mentre avanziamo, dovremo impegnarci a marciare per sempre in avanti. Non possiamo tornare indietro. Ci sono quelli che chiedono a coloro che chiedono i diritti civili: "Quando vi riterrete soddisfatti?" Non saremo mai soddisfatti finché il negro sarà vittima degli indicibili orrori a cui viene sottoposto dalla polizia.
        Non potremo mai essere soddisfatti finché i nostri corpi, stanchi per la fatica del viaggio, non potranno trovare alloggio nei motel sulle strade e negli alberghi delle città. Non potremo essere soddisfatti finché gli spostamenti sociali davvero permessi ai negri saranno da un ghetto piccolo a un ghetto più grande.
        Non potremo mai essere soddisfatti finché i nostri figli saranno privati della loro dignità da cartelli che dicono:"Riservato ai bianchi". Non potremo mai essere soddisfatti finché i negri del Mississippi non potranno votare e i negri di New York crederanno di non avere nulla per cui votare. No, non siamo ancora soddisfatti, e non lo saremo finché la giustizia non scorrerà come l’acqua e il diritto come un fiume possente.
        Non ha dimenticato che alcuni di voi sono giunti qui dopo enormi prove e tribolazioni. Alcuni di voi sono venuti appena usciti dalle anguste celle di un carcere. Alcuni di voi sono venuti da zone in cui la domanda di libertà ci ha lasciato percossi dalle tempeste della persecuzione e intontiti dalle raffiche della brutalità della polizia. Siete voi i veterani della sofferenza creativa. Continuate ad operare con la certezza che la sofferenza immeritata è redentrice.
        Ritornate nel Mississippi; ritornate in Alabama; ritornate nel South Carolina; ritornate in Georgia; ritornate in Louisiana; ritornate ai vostri quartieri e ai ghetti delle città del Nord, sapendo che in qualche modo questa situazione può cambiare, e cambierà. Non lasciamoci sprofondare nella valle della disperazione.
        E perciò, amici miei, vi dico che, anche se dovrete affrontare le asperità di oggi e di domani, io ho sempre davanti a me un sogno. E’ un sogno profondamente radicato nel sogno americano, che un giorno questa nazione si leverà in piedi e vivrà fino in fondo il senso delle sue convinzioni: noi riteniamo ovvia questa verità, che tutti gli uomini sono creati uguali.
        Io ho davanti a me un sogno, che un giorno sulle rosse colline della Georgia i figli di coloro che un tempo furono schiavi e i figli di coloro che un tempo possedettero schiavi, sapranno sedere insieme al tavolo della fratellanza.
        Io ho davanti a me un sogno, che un giorno perfino lo stato del Mississippi, uno stato colmo dell’arroganza dell’ingiustizia, colmo dell’arroganza dell’oppressione, si trasformerà in un’oasi di libertà e giustizia.
        Io ho davanti a me un sogno, che i miei quattro figli piccoli vivranno un giorno in una nazione nella quale non saranno giudicati per il colore della loro pelle, ma per le qualità del loro carattere. Ho davanti a me un sogno, oggi!.
        Io ho davanti a me un sogno, che un giorno ogni valle sarà esaltata, ogni collina e ogni montagna saranno umiliate, i luoghi scabri saranno fatti piani e i luoghi tortuosi raddrizzati e la gloria del Signore si mostrerà e tutti gli essere viventi, insieme, la vedranno. E’ questa la nostra speranza. Questa è la fede con la quale io mi avvio verso il Sud.
        Con questa fede saremo in grado di strappare alla montagna della disperazione una pietra di speranza. Con questa fede saremo in grado di trasformare le stridenti discordie della nostra nazione in una bellissima sinfonia di fratellanza.
        Con questa fede saremo in grado di lavorare insieme, di pregare insieme, di lottare insieme, di andare insieme in carcere, di difendere insieme la libertà, sapendo che un giorno saremo liberi. Quello sarà il giorno in cui tutti i figli di Dio sapranno cantare con significati nuovi: paese mio, di te, dolce terra di libertà, di te io canto; terra dove morirono i miei padri, terra orgoglio del pellegrino, da ogni pendice di montagna risuoni la libertà; e se l’America vuole essere una grande nazione possa questo accadere.
        Risuoni quindi la libertà dalle poderose montagne dello stato di New York.
        Risuoni la libertà negli alti Allegheny della Pennsylvania.
        Risuoni la libertà dalle Montagne Rocciose del Colorado, imbiancate di neve.
        Risuoni la libertà dai dolci pendii della California.
        Ma non soltanto.
        Risuoni la libertà dalla Stone Mountain della Georgia.
        Risuoni la libertà dalla Lookout Mountain del Tennessee.
        Risuoni la libertà da ogni monte e monticello del Mississippi. Da ogni pendice risuoni la libertà.
        E quando lasciamo risuonare la libertà, quando le permettiamo di risuonare da ogni villaggio e da ogni borgo, da ogni stato e da ogni città, acceleriamo anche quel giorno in cui tutti i figli di Dio, neri e bianchi, ebrei e gentili, cattolici e protestanti, sapranno unire le mani e cantare con le parole del vecchio spiritual: "Liberi finalmente, liberi finalmente; grazie Dio Onnipotente, siamo liberi finalmente".'
    ?>

    <h1>Discorso Martin Luther King</h1>

    <p>
        <?php echo $discorso_Martin_Luther_King; ?> 
    </p>

    <h2>
        <?php
            $original_length = strlen($discorso_Martin_Luther_King);
            echo 'Lunghezza: ' . $original_length;
        ?>
    </h2>

  

   

</body>
</html>