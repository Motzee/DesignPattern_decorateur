# Design pattern : Le décorateur

## Introduction

Imaginons un distributeur automatique proposant des boissons à différents prix (café, chocolat, ...), dans lesquelles on peut rajouter différents suppléments (chantilly, cannelle, ...). Le logiciel doit pouvoir ajuster la descript et le prix au choix de l'utilisateur.

/ ! \ Solution 2 :  Php permet visiblement aux classes enfants d'hériter des méthodes magiques de leur parent, mais ça n'est absolument pas automatique, et même peu fréquent pour les autres langages. Il faudra donc penser à appeler le constructeur du parent (exemple fait dans la solution 1) sur d'autres langages.