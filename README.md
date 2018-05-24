# Repo pour une install de WordPress avec composer

## Etapes

1. Créer une base de données.

2. Copier le fichier wp-config-sample.php, le renommer en `wp-config.php` et compléter:
- vos accès à la BDD
- les clés Salt
- modifier l'URL du projet en ajoutant votre chemin de dossier ; attention à bien laisser `/content` à la fin : 
`define( 'WP_CONTENT_URL', 'http://localhost/urlDuProjet/content' )`
- vérifier la partie debug

3. Ouvrir un terminal et exécuter `composer install`.

4. Si besoin (LAMP et MAMP), modifier les droits en écriture via le terminal (cela permettra de faire les MAJ, de télécharger un fichier de langues ou encore d'activer des thèmes) :
- permettre à apache d'écrire ds le dossier content: `sudo chown -R user:www-data .`
- droits sur les fichiers: `sudo find . -type f -exec chmod 664 {} +`
- droits sur les dossiers: `sudo find . -type d -exec chmod 775 {} +`

5. Ouvrir le dossier dans le navigateur et compléter les étapes pour configurer wp.

6. Dans le BO WordPress se rendre dans les réglages :
- général : "adresse web du site (URL)" >>> enlever /wp (modifiable également directement dans la base de données)
- permaliens : choisir la structure la plus adaptée
