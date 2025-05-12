<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chapter;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // supprimer tous les chapitres existants
        Chapter::truncate();

        $chapters = [
            ['id' => 1, 'title' => 'Chapitre 1 : Le rêve d’enfance',
             'content' => "Le soleil filtre à travers les rideaux de votre chambre d'enfant. Sur votre bureau, des croquis, des notes et des livres témoignent de cette passion qui vous consume depuis que vous avez sept ans. Chaque nuit, le même rêve revient : vous vous voyez réussir, accomplir ce projet qui semble trop grand pour vos petites mains. Mais aujourd'hui, à douze ans, vous sentez que quelque chose est différent. L'école vous a toujours été facile, et les adultes vous qualifient d'enfant \"surdoué·e\", un terme qui vous met mal à l'aise. Ce n'est pas l'intelligence qui vous définit, mais cette vision, ce rêve que vous n'avez encore jamais osé formuler à voix haute.
            Dans la cour de récréation, votre meilleur·e ami·e vous observe griffonner encore ces dessins étranges. \"Tu travailles encore sur ton truc secret?\" vous demande-t-il/elle avec un sourire curieux.\n\n" .
                          "**Choix 1** : Murmurer ton rêve à un·e ami·e → passion +1, clarté +1 → chapitre 2\n" .
                          "**Choix 2** : Garder le secret et jouer la sécurité → motivation -1, clarté -1 → chapitre 3",
             'order' => 1],
                         
            ['id' => 2, 'title' => 'Chapitre 2 : Encouragements innatendus',
             'content' => "\"C'est... incroyable,\" murmure votre ami·e, les yeux écarquillés après que vous ayez partagé votre vision. Le soleil de l'après-midi baigne la balançoire où vous êtes assis·es, loin des oreilles indiscrètes. Vous venez de dévoiler ce rêve qui vous habite : créer un système révolutionnaire qui changerait la façon dont les gens communiquent. Vous avez même un nom pour ça, un nom que vous venez de prononcer pour la première fois à voix haute.
            
             Contrairement à vos craintes, votre ami·e ne se moque pas. Au contraire, son regard s'illumine d'excitation. \"Mais pourquoi tu n'en as jamais parlé avant? Tu sais que ma tante travaille justement dans ce domaine? Elle pourrait peut-être nous aider!\"

            Ce soutien inattendu fait battre votre cœur plus vite. Pour la première fois, votre rêve semble sortir de votre imagination pour toucher le monde réel.\n\n" .
                          "**Choix 1** : Écrire un premier plan de projet dans votre carnet → motivation +1 → chapitre 4\n" .
                          "**Choix 2** : Douter encore et abandonner l'idée, craignant le jugement des adultes → passion -2, clarté -1 → chapitre 3",
             'order' => 2],


            ['id' => 3, 'title' => 'Chapitre 3 : Repli dans le confort familier',
             'content' => "Votre chambre est devenue votre refuge. Les semaines ont passé depuis que vous avez décidé de garder votre rêve pour vous. Les dîners familiaux sont comme d'habitude : votre père parle de son cabinet d'avocats, votre mère évoque ses patients à l'hôpital. Des carrières stables, respectables. Ils vous regardent avec cette fierté douce, celle des parents qui voient déjà leur enfant suivre leurs traces. \"Tu as eu ton A+ en science, comme toujours?\" demande votre père avec ce sourire satisfait.
            Vous acquiescez, mais quelque chose en vous s'éteint doucement. La nuit, votre carnet de croquis reste fermé dans le tiroir. Le poids du non-dit vous accompagne partout comme une ombre silencieuse. Pendant que les autres parlent de leur avenir, vous sentez cette chose précieuse qui s'effrite en vous, jour après jour.\n\n" .
                          "**Choix 1** : Chercher un mentor malgré la peur, en commençant par votre professeur de sciences → passion +2, motivation +1 → chapitre 4\n" .
                          "**Choix 2** : Rester dans votre zone de confort et accepter le chemin tout tracé pour vous → clarté -2 → chapitre 5",
             'order' => 3],

            ['id' => 4, 'title' => 'Chapitre 4 : Premier pas  dans l\'inconnu',
             'content' => "La bibliothèque municipale est devenue votre second foyer. Trois mois se sont écoulés depuis votre décision, et votre carnet s'est transformé en un véritable dossier de projet. Vous avez quinze ans maintenant, et les adultes commencent à vous prendre un peu plus au sérieux.

            Sur la table devant vous s'étale un plan concret : un montage de budget initial, un échéancier sur cinq ans, des croquis techniques plus détaillés, et même une analyse de marché rudimentaire. Votre professeur de sciences, Mme Martinez, vous a guidé·e discrètement, impressionnée par votre détermination.

            \"Tu sais,\" vous dit-elle en ajustant ses lunettes, \"mon ancien collègue dirige maintenant un fonds d'investissement en technologies. Il cherche justement des projets innovants portés par la jeune génération.\"

            Votre cœur s'accélère. L'opportunité semble aussi excitante que terrifiante..\n\n" .
                          "**Choix 1** : Présenter le plan à cet investisseur potentiel malgré votre jeune âge → motivation +2 → chapitre 6\n" .
                          "**Choix 2** : Peaufiner encore et encore votre projet, reportant l'échéance → clarté +1, motivation -1 → chapitre 5",
             'order' => 4],

            ['id' => 5, 'title' => 'Chapitre 5 : Paralysie de la perfection',
             'content' => "
            
             \"Ce n'est pas encore assez bon.\"

            Cette phrase tourne en boucle dans votre esprit alors que vous contemplez votre travail. Six mois se sont écoulés depuis que vous avez commencé à formaliser votre projet, et pourtant, vous n'avez toujours pas fait ce pas décisif. Votre chambre s'est transformée en un chaos organisé : des post-its tapissent les murs, des livres spécialisés s'empilent dans tous les coins, et trois versions différentes de votre plan d'affaires sont étalées sur votre bureau.

            À dix-huit ans, vos amis commencent à recevoir des lettres d'acceptation d'universités prestigieuses. Vos parents ont déjà encadré la lettre de Harvard qui vous est adressée. \"Une carrière solide, un avenir assuré,\" répète votre père.

            Chaque détail de votre projet vous semble désormais imparfait. Vous avez modifié la présentation quatorze fois. Le doute vous étouffe comme une couverture trop lourde en plein été.\n\n" .
                          "**Choix 1** : Forcer le lancement malgré vos doutes, en soumettant votre projet à un concours d'innovation → passion +1, motivation +1 → chapitre 6\n" .
                          "**Choix 2** : Abandonner et accepter l'offre d'Harvard pour un parcours plus conventionnel → passion -3 → chapitre 7",
             'order' => 5],


            ['id' => 6, 'title' => 'Chapitre 6 : Premier Échec, première leçon',
             'content' => "
             Le bureau de l'investisseur est exactement comme vous l'imaginiez : vue panoramique sur la ville, mobilier minimaliste, et cette atmosphère intimidante de pouvoir. M. Richardson, la cinquantaine élégante, vous a écouté·e pendant exactement douze minutes. Votre présentation était parfaite – du moins le pensiez-vous.

            \"Votre idée a du potentiel,\" dit-il en reposant votre dossier sur son bureau en verre. \"Mais elle manque de maturité. Et franchement, vous aussi.\"

            Ces mots vous frappent comme une gifle. Il poursuit avec un sourire qui se veut bienveillant : \"Revenez dans cinq ans, après vos études. Nous pourrons reparler de tout ça.\"

            Dans l'ascenseur qui vous ramène au rez-de-chaussée, cette première confrontation avec la dure réalité vous laisse un goût amer. Dehors, la pluie s'est mise à tomber, comme pour souligner votre échec.\n\n" .
                          "**Choix 1** : Retravailler entièrement votre business model en tenant compte des critiques → clarté +2 → chapitre 8\n" .
                          "**Choix 2** : Tout lâcher et quitter la ville pour un road trip improvisé → motivation -2, clarté -1 → chapitre 9",
             'order' => 6],

            ['id' => 7, 'title' => 'Chapitre 7 : Stabilité trompeuse et rêves éteints',
             'content' => "
             Le campus de Harvard est magnifique en automne. Les feuilles rouges et dorées tapissent les allées où vous marchez d'un pas mécanique entre deux cours. Trois années se sont écoulées depuis que vous avez rangé définitivement vos plans dans une boîte, enfouie au fond de votre placard.

            Votre téléphone vibre : c'est votre mère qui vous demande si vous avez postulé pour le stage au cabinet juridique qu'elle vous a recommandé. Un emploi sûr vous attend après l'obtention de votre diplôme. Une vie tracée, sans surprises.

            Le soir, dans votre chambre universitaire, vous remarquez que vous ne dessinez plus jamais. Vos notes sont parfaites, votre avenir est assuré, mais quelque chose s'est éteint dans votre regard. Parfois, vous croisez des étudiants qui travaillent sur des projets innovants au hacklab du campus, et une douleur sourde vous étreint, comme le fantôme d'un membre amputé.\n\n" .
                          "**Choix 1** : Reprendre vos études dans une direction plus créative, en intégrant un double cursus en design d'innovation → passion +1, motivation +1 → chapitre 8\n" .
                          "**Choix 2** : Vous résigner à votre routine et accepter le stage proposé → clarté -2 → fin c",
             'order' => 7],

            ['id' => 8, 'title' => 'Chapitre 8 : Renaissance d\'une vision',
             'content' => "
             Six mois de travail acharné ont transformé votre projet. Les nuits blanches à la bibliothèque universitaire, les entretiens avec des utilisateurs potentiels, les cours de programmation supplémentaires – tout cela a forgé une nouvelle version de votre idée, plus solide, plus mature.

            Dans ce petit café bruyant du quartier technologique, vous terminez votre présentation. En face de vous, Elena Vasquez, une entrepreneure reconnue dans l'écosystème des start-ups, tape doucement sur la table, visiblement impressionnée.

            \"Ce que j'aime dans votre approche,\" dit-elle en prenant une gorgée de son expresso, \"c'est que vous avez intégré l'échec dans votre processus. Votre nouveau modèle est non seulement viable, mais il répond à un besoin que personne n'a encore correctement adressé.\"

            Elle sort son agenda électronique. \"J'ai quelques contacts qui seraient intéressés. Et je pourrais envisager un investissement initial.\" Pour la première fois depuis longtemps, l'espoir renaît comme une flamme qu'on croyait éteinte.\n\n" .
                          "**Choix 1** : Démarrer immédiatement le projet avec l'enthousiasme retrouvé → passion +1, clarté -1 → chapitre 10\n" .
                          "**Choix 2** : Prendre le temps de consolider l'équipe et la stratégie → motivation +1 → chapitre 9",
             'order' => 8],

            ['id' => 9, 'title' => 'Chapitre 9 : Virage inattendu',
             'content' => "
             Les locaux temporaires de votre start-up embryonnaire se résument à un espace de coworking dans un ancien entrepôt réaménagé. Alors que vous finalisez la composition de votre équipe avec Elena, un email étrange arrive dans votre boîte de réception.

            Masashi Takeda, un investisseur japonais dont vous n'avez jamais entendu parler, vous propose une rencontre. Il a eu vent de votre projet par des canaux que vous ignorez. Sa proposition est déconcertante : il souhaite que vous appliquiez votre technologie non pas au marché que vous visiez initialement, mais à un secteur complètement différent – l'industrie médicale.

            \"C'est risqué,\" commente Elena en lisant par-dessus votre épaule. \"Mais le financement qu'il propose est trois fois supérieur à ce que nous espérions lever.\"

            La proposition est tentante mais effrayante. Ce virage changerait fondamentalement la nature de votre vision originelle.\n\n" .
                          "**Choix 1** : Saisir cette nouvelle voie et explorer l'application médicale de votre technologie → passion +2, motivation -1 → chapitre 11\n" .
                          "**Choix 2** : Rester fidèle au projet initial malgré l'offre financière alléchante → clarté +1 → chapitre 10",
             'order' => 9],
            
             ['id' => 10, 'title' => 'Chapitre 10 : Croissance et premières victoires',
             'content' => "
             Le petit bureau que vous louez au troisième étage d'un immeuble sans charme est devenu le quartier général d'une équipe de sept personnes. Sur les murs, des tableaux blancs couverts d'idées et de diagrammes. Dans l'air, l'odeur de café froid et d'excitation.

            Votre application est en version bêta depuis trois mois, et les premiers retours des utilisateurs sont enthousiastes. Ce matin, un article dans TechCrunch a mentionné votre start-up comme \"l'une des dix à suivre cette année\". Les premiers revenus commencent à arriver, encore modestes mais prometteurs.

            Elena entre dans votre bureau avec une bouteille de champagne et un rapport financier. \"Nous avons atteint notre objectif de conversion deux mois plus tôt que prévu,\" annonce-t-elle avec un sourire. \"Maintenant, il faut décider comment utiliser ce premier succès.\"

            Votre téléphone n'arrête pas de vibrer : investisseurs intéressés, demandes d'interview, propositions de partenariat.\n\n" .
                          "**Choix 1** : Réinvestir tous les profits dans le développement et l'expansion rapide → motivation +2, clarté -1 → chapitre 12\n" .
                          "**Choix 2** : Sécuriser une réserve financière et adopter une croissance plus mesurée → clarté +2 → chapitre 11",
             'order' => 10],

            ['id' => 11, 'title' => 'Chapitre 11 : Tempête en salle de conseil',
             'content' => "
             La tension est palpable dans la salle de réunion. Dehors, la pluie battante de novembre martèle les vitres, créant une bande sonore appropriée à l'orage qui se déroule à l'intérieur.

            \"Le marché du luxe est là où nous devrions nous positionner maintenant,\" insiste Takeda, ou Elena selon votre parcours précédent, en projetant des graphiques impressionnants sur l'écran. \"Nos algorithmes peuvent être adaptés pour cibler cette clientèle haut de gamme, avec des marges bien supérieures.\"

            Vous observez votre équipe divisée. La moitié semble séduite par cette nouvelle direction qui promet des bénéfices rapides. L'autre moitié vous regarde, attendant votre position. Votre projet initial visait l'accessibilité, pas l'exclusivité. Ce pivot représenterait un changement fondamental de votre vision éthique.

            \"Nous avons des investisseurs qui attendent une croissance exponentielle,\" poursuit votre associé·e. \"C'est maintenant qu'il faut frapper fort.\"\n\n" .
                          "**Choix 1** : Suivre la nouvelle direction proposée et pivoter vers le marché du luxe → motivation +1, passion -1 → chapitre 13\n" .
                          "**Choix 2** : Vous séparer de votre associé·e pour maintenir votre vision originelle → clarté -2, passion +1 → chapitre 12",
             'order' => 11],

            ['id' => 12, 'title' => 'Chapitre 12 : Essoufflement créatif',
             'content' => "
             Deux années de travail acharné ont transformé votre start-up en une entreprise en pleine croissance. Trente-sept employés, des bureaux spacieux, et une reconnaissance dans l'industrie. Mais à quel prix?

            Votre reflet dans le miroir des toilettes du bureau vous montre des cernes profonds, un teint blafard, et un regard qui a perdu de son éclat. Vous ne vous souvenez pas de la dernière fois que vous avez pris un week-end complet. Votre dernière relation amoureuse s'est terminée par un message texte laconique : \"Tu vis avec ton entreprise, pas avec moi.\"

            Les idées qui venaient si naturellement autrefois semblent maintenant vous fuir. Lors des réunions créatives, vous vous surprenez à regarder par la fenêtre, perdu·e dans un vide mental inquiétant. L'épuisement n'est pas seulement physique, il est créatif et spirituel.

            Votre directeur financier vous a laissé un rapport alarmant sur votre bureau : les coûts augmentent plus vite que prévu, et la prochaine levée de fonds sera cruciale.\n\n" .
                          "**Choix 1** : Prendre un break imposé en déléguant temporairement à votre équipe de direction → clarté +2, motivation -1 → chapitre 14\n" .
                          "**Choix 2** : Pousser encore plus fort en lançant une nouvelle fonctionnalité ambitieuse → motivation +2, clarté -2 → chapitre 13",
             'order' => 12],

            ['id' => 13, 'title' => 'Chapitre 13 : Succès partiel et scandale inattendu',
             'content' => "
             Les magazines économiques ont mis votre visage en couverture. \"L'entrepreneur·e de l\'année,\" titrent-ils. Votre application compte désormais des millions d'utilisateurs, et les chiffres continuent de grimper. La valorisation de votre entreprise a dépassé vos rêves les plus fous.

            Pourtant, ce matin, tout s'écroule. Un journal d'investigation vient de publier un article explosif révélant que votre technologie présente une faille de sécurité majeure. Des données sensibles d'utilisateurs auraient été exposées pendant des mois. Pire encore, l'article suggère que votre équipe était au courant et a délibérément dissimulé le problème.

            Votre téléphone explose de notifications. Les réseaux sociaux s'enflamment. Vos investisseurs exigent une réunion d'urgence. Certains membres de votre équipe commencent déjà à prendre leurs distances, se préparant à nier toute responsabilité.

            Dans votre bureau assiégé, vous devez prendre une décision rapide avant que la situation ne devienne incontrôlable.\n\n" .
                          "**Choix 1** : Faire face publiquement en assumant la responsabilité et proposant un plan correctif ambitieux → clarté +2 → chapitre 15\n" .
                          "**Choix 2** : Fuir et tenter de couvrir l'affaire en niant les accusations → passion -2, motivation -1 → fin b",
             'order' => 13],

            ['id' => 14, 'title' => 'Chapitre 14 : Introspection au bout du monde',
             'content' => "
             Le petit bungalow que vous avez loué se trouve au bout d'une plage déserte. Ici, à Bali, personne ne connaît votre nom ni votre entreprise. Pour la première fois depuis des années, vous vous réveillez sans alarme, sans notifications, sans urgences.

            Les premières semaines ont été difficiles – votre corps et votre esprit se rebellaient contre ce repos forcé. Mais progressivement, quelque chose a changé. La lecture de livres non-professionnels, la méditation au lever du soleil, les longues marches sur la plage – tout cela a commencé à restaurer une clarté que vous aviez perdue.

            Un soir, assis·e sur le sable face à l'océan Indien, vous redécouvrez votre \"pourquoi\" originel. Cette vision pure qui vous animait avant que les investisseurs, la croissance et la pression ne la diluent. Vous commencez à griffonner dans un carnet, comme autrefois. Non pas des chiffres ou des stratégies marketing, mais le cœur même de ce qui vous avait fait rêver.

            Votre téléphone, que vous consultez une fois par semaine, indique que votre équipe gère bien la situation en votre absence. Une décision s'impose.\n\n" .
                          "**Choix 1** : Choix 1 : Redéfinir complètement votre vision et retourner avec un projet réaligné → clarté +2, passion +1 → chapitre 15\n" .
                          "**Choix 2** : Renoncer définitivement et vendre vos parts pour commencer une nouvelle vie → motivation -3 → fin e",
             'order' => 14],

            ['id' => 15, 'title' => 'Chapitre 15 : L\'apogée et l\'ultime défi',
             'content' => "
             L'amphithéâtre est comble. Au premier rang, des investisseurs, des journalistes, des analystes de l'industrie. Le silence se fait lorsque vous montez sur scène. Ce moment représente l'aboutissement de tout votre parcours.

            Derrière vous, un écran géant affiche votre logo. Dans vos mains, la présentation qui pourrait catapulter votre entreprise dans une dimension nouvelle ou précipiter sa chute. Les enjeux n'ont jamais été aussi élevés.

            Les caméras de plusieurs chaînes d'information retransmettent l'événement en direct. Vous savez que vos concurrents regardent aussi, prêts à exploiter la moindre faiblesse.

            Dans les coulisses, votre équipe vous a préparé deux approches distinctes : une présentation technique et chiffrée qui impressionnera les analystes, ou un discours plus personnel sur l'impact humain de votre technologie. Et bien sûr, vous avez cette carte secrète, ce projet révolutionnaire que personne n'attend, mais qui pourrait tout changer – à condition d'être prêt·e à en payer le prix.\n\n" .
                          "**Choix 1** : Jouer la carte de l'émotion avec un discours inspirant sur votre parcours et votre vision → passion +2 → fin a\n" .
                          "**Choix 2** : Prouver votre excellence par vos chiffres et votre rigueur technique → clarté +2 → fin d\n" .
                          "**Choix 3** : Proposer un compromis sentimental et chiffré, alliant cœur et raison → motivation +1, clarté +1 → fin f\n" .
                          "**Choix 4** : Révéler un secret explosif sur l'industrie pour tout bouleverser → passion -1, clarté -2 → chapitre 16",
             'order' => 15],

            ['id' => 16, 'title' => 'Chapitre 16 : Choc médiatique et crise existentielle',
             'content' => "
             \"SCANDALE!\" Le mot s'étale en lettres capitales sur tous les sites d'information. Votre révélation sur les pratiques douteuses de l'industrie – incluant certains de vos propres investisseurs – a déclenché un tsunami médiatique. Votre téléphone n'a pas cessé de sonner depuis 48 heures.

            Dans votre appartement, les stores baissés vous isolent du monde extérieur. Certains vous qualifient de héros courageux, d'autres de traître irresponsable. Votre conseil d'administration s'est réuni en urgence sans vous inviter. Trois de vos principaux partenaires ont publiquement rompu leurs liens avec votre entreprise.

            Votre directeur juridique a déposé sur votre table basse une pile de documents : assignations à comparaître, menaces de poursuites, demandes de clarification de régulateurs gouvernementaux. La vérité que vous avez choisi de révéler était peut-être nécessaire, mais elle a un prix que vous commencez seulement à mesurer.

            Sur votre téléphone, deux messages non lus retiennent votre attention : un cabinet d'avocats prestigieux proposant de vous défendre, et une notification d'une chaîne d'information vous invitant à vous exprimer en direct.\n\n" .
                          "**Choix 1** : Engager un avocat pour une riposte judiciaire méthodique → motivation +1 → chapitre 17\n" .
                          "**Choix 2** : Confier un mea culpa sincère en vidéo, expliquant vos motivations → passion +1, clarté +1 → chapitre 18",
             'order' => 16],

            ['id' => 17, 'title' => 'Chapitre 17 : Effondrement personnel face à l\'adversité',
             'content' => "
             Le procès s'éternise depuis huit mois. Votre vie est devenue un enchaînement de dépositions, de rencontres avec vos avocats, et de sessions stratégiques. La presse, d'abord passionnée par l'affaire, s'en désintéresse progressivement, mais les dégâts sur votre réputation sont profonds.

            Votre appartement s'est transformé en un bunker où vous vous isolez du regard des autres. Les rares fois où vous sortez, vous avez l'impression que les gens vous reconnaissent et murmurent sur votre passage. Certains anciens amis ne répondent plus à vos messages.

            Le pire est peut-être cette sensation d'avoir perdu le contrôle de votre propre histoire. Les avocats vous conseillent de ne pas vous exprimer publiquement, les médias déforment vos intentions, et même votre propre entreprise, désormais dirigée par un CEO intérimaire, prend ses distances avec vous.

            Une nuit, contemplant la ville depuis votre balcon, vous réalisez que vous n'avez pas ri ni vraiment parlé à quelqu'un depuis des semaines.\n\n" .
                          "**Choix 1** : Chercher du soutien thérapeutique pour reconstruire votre équilibre mental → clarté +2 → chapitre 18\n" .
                          "**Choix 2** : Fuir la lumière et partir à l'étranger sous une nouvelle identité → motivation -2 → fin h",
             'order' => 17],

            ['id' => 18, 'title' => 'Chapitre 18 : Renaissance ultime',
             'content' => "
             \"Parfois, on doit tout perdre pour se retrouver.\"

            Cette phrase, prononcée par votre thérapeute il y a six mois, résonne différemment aujourd'hui. Après la tempête médiatique, les procès et l'isolement, vous avez entrepris un long chemin de reconstruction. D'abord personnelle, puis professionnelle.

            Votre bureau actuel est modeste comparé à celui que vous aviez au sommet de votre gloire. Mais l'atmosphère y est différente – authentique, alignée avec vos valeurs profondes. Sur le mur, une citation encadrée : \"Le succès n'est pas final, l'échec n'est pas fatal, c'est le courage de continuer qui compte.\"

            Les leçons apprises durant cette crise vous ont transformé·e. Vous avez une compréhension plus nuancée de l'éthique des affaires, de l'impact réel de la technologie, et surtout, de vous-même. Votre équipe actuelle, plus petite mais plus soudée, vous regarde avec un respect qui n'a rien à voir avec la crainte ou l'admiration aveugle.

            Sur votre bureau, deux propositions attendent votre décision : lancer un nouveau projet centré sur l'éthique numérique, ou accepter une série de conférences pour partager votre parcours sinueux.\n\n" .
                          "**Choix 1** : Lancer un nouveau projet éthique intégrant toutes vos leçons apprises → passion +2, clarté +1 → fin g\n" .
                          "**Choix 2** : Partager votre histoire comme conférencier·ère pour inspirer d'autres entrepreneurs → motivation +2 → fin f",
             'order' => 18],

            ['id' => 19, 'title' => 'Chapitre 19 : Descente aux enfers',
             'content' => "
             Le reflet dans le miroir vous est devenu étranger. Des yeux cernés, un teint gris, des épaules voûtées – la personne que vous voyez n'est plus celle qui avait l'habitude de rayonner de confiance et d'ambition. L'échec de votre entreprise n'est pas seulement financier, il est devenu personnel et profond.

            Votre appartement luxueux, dernier vestige de votre succès éphémère, est dans un état de négligence qui reflète votre âme. Des cartons de plats à emporter s'empilent sur le comptoir de la cuisine. Votre téléphone, autrefois constamment allumé par des notifications incessantes, reste silencieux pendant des jours. Les rares messages proviennent de créanciers ou d'anciens employés amers.

            Le poids des regrets vous écrase chaque matin un peu plus. Vous revivez chaque mauvaise décision, chaque compromis qui vous a mené·e ici. La pression médiatique s'est estompée – le monde a trouvé d'autres histoires d'échec à dévorer – mais le silence qui a suivi est peut-être encore plus assourdissant.

            Un soir, alors que l'orage gronde dehors, votre ancien·ne ami·e d'enfance, celui/celle à qui vous aviez confié votre rêve pour la première fois, vous laisse un message. \"Je m'inquiète. Réponds-moi, s'il te plaît.\"\n\n" .
                          "**Choix 1** : Confier votre mal-être à votre ami·e d'enfance → clarté +1, motivation +1 → chapitre 20\n" .
                          "**Choix 2** : Vous isoler encore davantage, éteignant même votre téléphone → passion -1, clarté -1 → chapitre 21",
             'order' => 19],

            ['id' => 20, 'title' => 'Chapitre 20 : Point de rupture',
             'content' => "
             La pluie frappe inlassablement contre les vitres de votre appartement. Sur la table basse, des factures impayées, des lettres de relance, et cette photo de vous lors du lancement de votre entreprise – un sourire confiant qui appartient désormais à une autre vie, à une autre personne.

            Après plusieurs jours d'hésitation, vous avez finalement répondu au message de votre ami·e d'enfance. Votre voix tremblante a avoué l'ampleur de votre désespoir. \"Je ne vois plus d'issue,\" avez-vous murmuré dans le combiné. \"Tout ce que j'ai construit s'est effondré. Je ne suis plus rien.\"

            Cette nuit, l'obscurité qui vous enveloppe semble plus dense, plus définitive. Votre esprit, jadis brillant et créatif, tourne en rond dans un labyrinthe sans issue. Les somnifères dans votre armoire à pharmacie vous appellent. Pas pour dormir cette fois, mais pour ne plus jamais vous réveiller.

            Sur votre bureau, un bloc-notes vierge attend peut-être vos derniers mots. À moins qu'un dernier sursaut, une infime étincelle de ce qui vous animait autrefois, ne luise encore quelque part au fond de vous.\n\n" .
                          "**Choix 1** : Saisir une ultime lettre d'adieu → clarté +1 → fin i\n" .
                          "**Choix 2** : Trouver une lueur de sens → motivation +2, clarté +1 → chapitre 18",
             'order' => 20],

            ['id' => 21, 'title' => 'Chapitre 21 : Tentation criminelle',
             'content' => "
             L'injustice vous ronge comme un acide. Chaque nuit sans sommeil alimente votre colère. Vos anciens investisseurs prospèrent tandis que vous sombrez. L'un d'eux vient même d'apparaître dans un magazine économique, posant fièrement devant sa nouvelle villa.

            En parcourant les archives numériques de votre entreprise, vous réalisez que vous possédez toujours les codes d'accès au compte principal. Une somme substantielle s'y trouve – de l'argent qui était destiné au développement du projet que vous aviez créé. Techniquement, ce n'est plus le vôtre. Légalement, y toucher serait un crime.

            Dans un autre dossier, vous découvrez des informations compromettantes sur votre principal concurrent, qui a récemment lancé un produit étrangement similaire au vôtre. Des preuves suggèrent qu'ils ont peut-être volé vos idées. Une révélation publique pourrait les détruire – ou vous attirer encore plus d'ennuis.

            La frontière entre justice et vengeance n'a jamais été aussi floue. L'adrénaline de la colère vous donne une énergie que vous n'aviez plus ressentie depuis longtemps.\n\n" .
                          "**Choix 1** : Voler le capital de votre propre entreprise → motivation +1, clarté -1 → chapitre 22\n" .
                          "**Choix 2** : Saboter le projet d'un·e rival·e → passion +1, motivation -2 → chapitre 22",
             'order' => 21],

            ['id' => 22, 'title' => 'Chapitre 22 : Passage à l’acte',
             'content' => "
             Le cœur battant, les mains moites sur votre clavier, vous contemplez ce que vous venez de faire. Selon le choix précédent, l'écran affiche soit une confirmation de transfert vers un compte offshore, soit un email anonyme envoyé à plusieurs journalistes d'investigation, révélant des informations compromettantes sur votre rival·e.

            Une sensation étrange vous envahit – un mélange de satisfaction vengeresse et de terreur face aux conséquences. Votre téléphone sonne. C'est votre avocat. \"Il y a eu une activité suspecte,\" dit-il d'une voix tendue. \"Les autorités posent des questions.\"

            Par la fenêtre, vous apercevez une voiture noire stationnée en face de votre immeuble. Coïncidence ou surveillance? La paranoïa s'installe. Vous rassemblez rapidement quelques affaires essentielles dans un sac de voyage. Votre passeport, des liquidités, quelques vêtements.

            L'action irréfléchie de ces dernières heures a momentanément apaisé votre douleur, mais la réalité vous rattrape maintenant à grande vitesse. Deux chemins s'offrent à vous : la fuite ou l'affrontement des conséquences.\n\n" .
                          "**Choix 1** : Fuir le pays avec l'argent volé→ motivation -1, clarté -2 → fin j\n" .
                          "**Choix 2** : Vous rendre et subir le jugement → clarté +1 → fin k",
             'order' => 22],

            ['id' => 23, 'title' => 'Fin A : Passion triomphante',
             'content' => "L'amphithéâtre retient son souffle alors que vous terminez votre discours. Pas une présentation technique, pas une démonstration de chiffres – mais l'histoire vraie de votre parcours, de ce rêve d'enfant devenu réalité. Votre voix, chargée d'émotion authentique, a touché chaque personne présente.\n\n" .
            "\"Je ne suis pas ici pour vous impressionner avec des projections de croissance,\" avez-vous conclu. \"Je suis ici pour vous rappeler pourquoi nous créons, pourquoi nous innovons – pour améliorer des vies, pour résoudre des problèmes qui comptent vraiment.\"\n\n" .
            "L'ovation qui suit est assourdissante. Dans les jours qui suivent, votre discours devient viral. Les investisseurs affluent, non pas attirés par des promesses de rendements exponentiels, mais par votre vision sincère et votre intégrité.\n\n" .
            "Trois ans plus tard, votre entreprise est devenue un modèle d'innovation responsable. Vous avez créé une fondation qui accompagne les jeunes créateurs avec des rêves similaires au vôtre. Votre bureau garde cette simplicité qui vous caractérise désormais – un espace où les idées naissent librement.\n\n" .
            "Le soir, en rentrant chez vous, vous souriez en réalisant que le succès le plus précieux n'est pas dans les chiffres, mais dans cet alignement parfait entre votre passion d'enfant et l'adulte que vous êtes devenu·e.",
             'order' => 23],

            ['id' => 24, 'title' => 'Fin B : Omerta dangereuse',
             'content' => "\"Nous nions catégoriquement ces allégations sans fondement,\" déclare votre porte-parole lors d'une conférence de presse minutieusement orchestrée. Pendant ce temps, dans les coulisses, vos équipes techniques travaillent jour et nuit pour colmater la faille de sécurité, espérant que personne d'autre ne la découvrira.\n\n" .
            "La stratégie fonctionne, du moins en apparence. L'affaire est progressivement étouffée. Les journalistes, confrontés à votre mur de démentis et de menaces légales, se tournent vers d'autres scandales plus faciles à prouver. Le cours de votre action se stabilise.\n\n" .
            "Mais cette victoire a un prix invisible. Chaque matin, en vous regardant dans le miroir, vous voyez la vérité que le monde ignore. Dans les couloirs de votre entreprise, les regards fuyants de certains employés qui savent. La peur constante qu'un lanceur d'alerte ne décide de tout révéler.\n\n" .
            "Les nuits sont les plus difficiles. Le sommeil vous fuit, remplacé par l'anxiété. Votre entreprise continue de croître, vous devenez même plus riche, mais une prison invisible s'est refermée sur vous – celle du mensonge et de la peur permanente d'être démasqué·e.\n\n" .
            "Lors d'une réception mondaine, un inconnu vous glisse à l'oreille : \"Je sais ce que vous avez fait.\" Vous ne saurez jamais s'il s'agissait d'une coïncidence ou d'une menace réelle. Mais une chose est certaine : vous ne connaîtrez plus jamais la paix d'esprit.",
             'order' => 24],

            ['id' => 25, 'title' => 'Fin C : Sécurité en cage',
             'content' => "Le bureau que l'on vous a attribué au 47ᵉ étage offre une vue imprenable sur la ville. \"Senior Counsel\" – le titre sur votre porte est prestigieux, votre salaire confortable. Vos parents n'ont jamais été aussi fiers. Lors des dîners familiaux, votre père ne manque jamais de mentionner son enfant qui a \"réussi\".\n\n" .
            "Chaque matin suit le même rituel immuable : le même café, le même trajet, les mêmes réunions où vous parlez un langage juridique précis et dépourvu de toute créativité. Vos collègues vous respectent pour votre rigueur, mais personne ne connaît vraiment la personne derrière le costume impeccable.\n\n" .
            "Le soir, seul·e dans votre appartement luxueux mais impersonnel, vous ouvrez parfois ce tiroir fermé à clé. À l'intérieur, ces vieux croquis, ces plans, ces rêves d'enfant que vous avez trahis pour la sécurité. Une vie sans risques, sans échecs – mais aussi sans la joie vertigineuse de créer.\n\n" .
            "Parfois, lors d'une rare promenade dominicale, vous passez devant un incubateur de start-ups. À travers les vitres, vous observez ces jeunes entrepreneurs passionnés, leurs yeux brillants d'espoir et d'ambition. Une douleur sourde vous étreint alors – celle d'un chemin non emprunté, d'une vie parallèle où vous auriez été fidèle à ce que vous étiez vraiment.\n\n" .
            "Votre compte en banque se porte bien, mais votre âme s'est lentement desséchée dans cette cage dorée que vous avez vous-même choisie.",
             'order' => 25],

            ['id' => 26, 'title' => 'Fin D : Logique gagnante',
             'content' => "Les graphiques et les chiffres défilent sur l'écran géant tandis que vous présentez méticuleusement votre vision. Pas d'émotions superflues, pas d'anecdotes personnelles – uniquement des faits, des preuves, des projections rigoureuses. Les analystes dans l'audience hochent la tête avec approbation.\n\n" .
            "\"Nous ne vendons pas des rêves,\" concluez-vous avec assurance, \"nous créons l'avenir avec précision et méthode.\"\n\n" .
            "Cette approche porte ses fruits. Dans les mois qui suivent, votre entreprise devient une référence incontournable. Les investisseurs institutionnels se bousculent. Votre méthodologie est enseignée dans les écoles de commerce. Forbes vous consacre sa couverture, saluant un leadership \"brillamment cartésien dans un monde d'entrepreneurs trop émotifs\".\n\n" .
            "Le succès matériel est indéniable. Votre fortune personnelle atteint des sommets vertigineux. Votre influence dans l'industrie est sans précédent.\n\n" .
            "Pourtant, les victoires sonnent étrangement creux dans l'intimité de votre quotidien. Vos relations personnelles, sacrifiées sur l'autel de l'efficacité, sont rares et superficielles. Lorsque vous recevez un prix prestigieux lors d'une cérémonie retransmise mondialement, personne dans la salle n'est vraiment là pour vous, seulement pour ce que vous représentez.\n\n" .
            "Un soir, après une énième réunion triomphale, vous contemplez la ville illuminée depuis la terrasse de votre penthouse. La réussite objective est là, incontestable. Mais cette petite voix intérieure, celle de l'enfant aux rêves lumineux, vous murmure encore que les chiffres ne racontent jamais l'histoire complète d'une vie.",
             'order' => 26],

            ['id' => 27, 'title' => 'Fin E : Abandon lumineux',
             'content' => "La décision de vendre vos parts a créé une onde de choc dans l'industrie. \"Entrepreneur·e prometteur·se abandonne au moment décisif\" titraient les blogs spécialisés. Mais leur incompréhension n'a plus d'importance désormais.\n\n" .
            "La petite maison que vous avez achetée sur cette île isolée est simple – bois, pierre, lumière naturelle. Vos journées suivent le rythme du soleil plutôt que celui des marchés financiers. La connexion internet est volontairement limitée. Le temps s'écoule différemment ici.\n\n" .
            "Vous avez commencé à enseigner à l'école locale, partageant avec les enfants non pas des techniques de codage ou des stratégies de croissance, mais cette créativité pure qui vous animait avant que le monde des affaires ne la formate. Leur enthousiasme est la récompense la plus sincère que vous ayez jamais reçue.\n\n" .
            "Un magazine a tenté de vous retrouver pour un article intitulé \"Que sont-ils devenus ?\". Vous avez poliment décliné l'interview. Votre ancien monde considère peut-être votre choix comme un échec ou une fuite. Ils ne peuvent comprendre cette vérité que vous avez découverte : parfois, abandonner un chemin qui n'est plus le vôtre est le plus grand acte de courage.\n\n" .
            "Le soir, sur la plage, vous dessinez encore – non plus des algorithmes ou des plans d'affaires, mais simplement pour la joie de créer, sans but, sans pression, sans attentes. Et dans cette liberté retrouvée, vous avez redécouvert une richesse que aucune valorisation d'entreprise ne pourrait jamais quantifier.",
             'order' => 27],

            ['id' => 28, 'title' => 'Fin F : Équilibre rare',
             'content' => "Votre présentation a réussi l'impossible : satisfaire les investisseurs tout en restant fidèle à vos valeurs. Cette voie médiane, cette capacité à allier créativité et pragmatisme, est devenue votre signature.\n\n" .
            "\"Nous construisons une entreprise rentable parce que c'est la seule façon de rendre notre mission durable,\" avez-vous expliqué avec cette clarté qui vous caractérise désormais. \"Mais le profit n'est pas notre finalité – il est le carburant de notre ambition véritable.\"\n\n" .
            "Cinq ans se sont écoulés. Votre entreprise n'est pas la plus grande ni la plus valorisée du secteur, mais elle est unanimement respectée pour son intégrité et son innovation constante. Vos concurrents peuvent afficher des croissances plus spectaculaires, mais aucun ne peut se vanter de votre taux de rétention d'employés ou de la fidélité de vos clients.\n\n" .
            "Votre vie personnelle, longtemps négligée, a retrouvé sa place. Ce n'est plus \"tout pour l'entreprise\" mais un équilibre subtil, une danse quotidienne entre ambition professionnelle et épanouissement personnel. Vous avez même retrouvé le temps d'être mentor pour quelques jeunes entrepreneurs, leur transmettant non pas seulement des techniques, mais cette philosophie d'équilibre qui vous a sauvé·e.\n\n" .
            "Lors d'une conférence, un journaliste vous demande si vous regrettez de ne pas avoir \"tout sacrifié\" pour une croissance plus explosive. Votre sourire sincère est la seule réponse nécessaire. La vraie réussite, avez-vous compris, n'est pas dans les extrêmes, mais dans cette harmonie difficile à atteindre entre raison et passion.",
             'order' => 28],

            ['id' => 29, 'title' => 'Fin G : Renaissance éthique',
             'content' => "\"L'éthique n'est pas un obstacle à l'innovation – elle en est le prochain territoire,\" déclarez-vous sur scène lors du lancement de votre nouveau projet. La salle est bondée, mais différente de celles que vous fréquentiez autrefois. Ici, des activistes côtoient des entrepreneurs, des chercheurs discutent avec des artistes.\n\n" .
            "Après votre traversée du désert, vous avez reconstruit non seulement votre carrière, mais votre vision entière de la technologie. Votre nouvelle entreprise intègre dès sa conception des principes éthiques rigoureux : transparence totale, gouvernance partagée, impact environnemental minimal, protection absolue des données utilisateurs.\n\n" .
            "Les investisseurs traditionnels ont d'abord été sceptiques. \"Trop d'idéalisme tue le business model,\" vous avait-on averti. Mais vous avez prouvé le contraire. Votre approche a trouvé un écho puissant auprès d'une génération en quête de sens et d'intégrité.",
             'order' => 29],

            ['id' => 30, 'title' => 'Fin H : Effondrement total',
             'content' => "Le petit motel à la périphérie de cette ville dont personne n'a jamais entendu parler est devenu votre seul refuge. Sous un nom d'emprunt, vous survivez avec les maigres économies qui vous restent. Votre téléphone est éteint depuis des mois. Votre boîte email, autrefois inondée de milliers de messages, est désactivée.\n\n" .
            "Les journaux ne parlent plus de vous. À quoi bon s'intéresser à une étoile déchue quand tant d'autres brillent désormais ? Votre histoire est devenue un cas d'étude sur l'échec dans certaines écoles de commerce – une mise en garde impersonnelle pour futurs entrepreneurs.\n\n" .
            "Les jours se ressemblent dans cette existence fantomatique. Vous observez le monde continuer sans vous, comme si vous regardiez à travers une vitre embuée. Parfois, vous croisez dans la rue quelqu'un qui vous semble vaguement familier, et vous vous demandez si cette personne pourrait vous reconnaître. Cette pensée vous fait accélérer le pas, tête baissée.\n\n" .
            "La nuit, les rêves sont les plus cruels – vous revoyez ce que vous auriez pu être, ce que vous aviez presque atteint. À l'éveil, la réalité n'en est que plus douloureuse. Dans les moments de lucidité, vous réalisez que ce n'est pas l'échec professionnel qui vous a détruit, mais votre incapacité à l'accepter, à le transformer en apprentissage.\n\n" .
            "Votre histoire s'achève dans l'anonymat, loin des projecteurs que vous aviez tant recherchés. Un crépuscule silencieux pour ce qui avait commencé comme une aube prometteuse.",
             'order' => 30],

            ['id' => 31, 'title' => 'Fin I : Suicide tragique',
             'content' => "La lettre est soigneusement posée sur la table. Vos mots, pesés et mesurés, tentent d'expliquer l'inexplicable. D'abord des excuses – à vos parents, à vos amis, à ceux qui avaient cru en vous. Puis une tentative de donner un sens à votre décision finale : \"Je ne vois plus ma place dans ce monde. Le rêve qui me définissait s'est évanoui, et avec lui, ma raison d'être.\"\n\n" .
            "Les médias couvrent votre départ avec cette fascination morbide qu'ils réservent aux trajectoires fulgurantes brisées en plein vol. Des articles analysent les \"signes avant-coureurs\" que personne n'avait su voir. D'anciens collaborateurs expriment leur choc et leur tristesse. Certains de vos rivaux affichent une compassion de façade qui masque mal leur soulagement coupable.\n\n" .
            "À vos funérailles, la foule est nombreuse mais silencieuse. Votre meilleur·e ami·e d'enfance lit un texte évoquant cet enfant brillant que vous étiez, ce rêveur aux yeux pleins d'espoir. Dans l'assistance, plusieurs pleurent en pensant aux appels non retournés, aux signaux de détresse ignorés.\n\n" .
            "Votre histoire devient progressivement un symbole – celui de la pression excessive dans le monde impitoyable des start-ups, celui d'une société qui célèbre le succès mais abandonne ceux qui trébuchent. Une fondation est créée à votre nom pour aider les entrepreneurs en difficulté psychologique.\n\n" .
            "Mais pour ceux qui vous aimaient vraiment, aucun symbole, aucune cause, aucune leçon ne pourra jamais combler le vide vertigineux de votre absence.",
             'order' => 31],

            ['id' => 32, 'title' => 'Fin J : Crime fatal',
             'content' => "**En fuite :**\nL'aéroport grouille de monde. Sous votre nouvelle identité, vous traversez les contrôles, le cœur battant. Le passeport falsifié fonctionne. Quelques heures plus tard, vous atterrissez dans un pays sans accord d'extradition avec le vôtre.\n\n" .
            "Les années passent dans une paranoïa constante. Chaque sirène de police vous fait sursauter. Chaque appareil photo vous fait détourner le visage. L'argent volé, qui semblait représenter une justice poétique, s'épuise plus vite que prévu. Vous vivez dans l'ombre, incapable de nouer des relations sincères, de construire quoi que ce soit de durable.\n\n" .
            "Un soir, dans un bar anonyme d'une ville lointaine, vous apercevez votre visage à la télévision – une vieille photo accompagnant un reportage sur les \"criminels en col blanc toujours recherchés\". Votre cœur se serre en réalisant que vous êtes devenu·e l'opposé exact de ce que cet enfant plein de rêves aspirait à être.",
             'order' => 32],

            ['id' => 33, 'title' => 'Fin K : Crime fatal',
             'content' => "**En prison :**\nLa cellule est spartiate mais propre. Après votre reddition volontaire et le procès médiatisé, vous avez été condamné·e à cinq ans d'incarcération. Les premiers mois ont été les plus durs – l'humiliation publique, le regard des autres détenus, l'adaptation à cette vie réglée par des sonneries et des ordres.\n\n" .
            "Étrangement, c'est dans cette contrainte absolue que vous avez redécouvert une forme de liberté intérieure. Sans distraction, sans possibilité de fuite, vous avez dû affronter vos erreurs, vos motivations, vos peurs les plus profondes.\n\n" .
            "Vous avez commencé à écrire – d'abord un journal intime, puis un manuscrit plus structuré sur votre parcours, vos erreurs, les leçons apprises. Ce projet vous a redonné un semblant de but, une façon de transformer cette expérience en quelque chose d'utile.\n\n" .
            "Les visites sont rares. La société n'aime pas les rappels de ses propres contradictions. Mais quelques personnes fidèles – dont votre ami·e d'enfance – n'ont jamais cessé de croire en votre capacité de rédemption.\n\n" .
            "À mi-peine, vous recevez une proposition inattendue d'une maison d'édition pour votre manuscrit. \"Les gens ont besoin d'entendre cette histoire,\" écrit l'éditrice. \"Pas comme un scandale, mais comme un témoignage humain sur les limites que nous pouvons tous franchir.\"\n\n" .
            "Derrière les barreaux, vous commencez lentement à reconstruire, non pas votre empire perdu, mais quelque chose de peut-être plus précieux – votre humanité.",
             'order' => 33],
        ];

        foreach ($chapters as $data) {
            Chapter::create($data);
        }

        $this->command->info('Chapitres insérés avec succès!');
    }
}
