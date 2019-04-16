<?php

namespace Lychee\Locale;

final class French
{
	static public function code()
	{
		return 'fr';
	}

	static public function get_locale()
	{
		$locale = array(
			'USERNAME'		=> 'Nom d\'utilisateur',
			'PASSWORD'		=> 'Mot de passe',
			'ENTER'			=> 'Enter',
			'CANCEL'		=> 'Annuler',
			'SIGN_IN'		=> 'Connexion',
			'CLOSE'			=> 'Fermer',

			'CHANGE_LOGIN'		=> 'Changer le nom d\'utilisateur',
			'CHANGE_SORTING'	=> 'Changer le tri',
			'SET_DROPBOX'		=> 'Paramétrer Dropbox',
			'ABOUT_LYCHEE'		=> 'À propos de Lychee',
			'DIAGNOSTICS'		=> 'Diagnostics',
			'LOGS'				=> 'Afficher les logs',
			'SIGN_OUT'			=> 'Se déconnecter',
			'UPDATE_AVAILABLE'	=> 'Une mise à jour est disponible !',

			'SMART_ALBUMS'		=> 'Albums intelligents',
			'ALBUMS'			=> 'Albums',

			'RENAME'			=> 'Renommer',
			'RENAME_ALL'		=> 'Tout renommer',
			'MERGE'				=> 'Fusionner',
			'MERGE_ALL'			=> 'Tout fusionner',
			'MAKE_PUBLIC'		=> 'Rendre public',
			'SHARE_ALBUM'		=> 'Partager l\'album',
			'SHARE_PHOTO'		=> 'Partager la photo',
			'DOWNLOAD_ALBUM'	=> 'Télécharger l\'album',
			'ABOUT_ALBUM'		=> 'À propos de l\'album',
			'DELETE_ALBUM'		=> 'Supprimer l\'album',

			'DELETE_ALBUM_QUESTION'			=> 'Supprimer l\'album et ses photos',
			'KEEP_ALBUM'					=> 'Garder l\'album',
			'DELETE_ALBUM_CONFIRMATION_1'	=> 'Voulez-vous vraiment supprimer l\'album ',
			'DELETE_ALBUM_CONFIRMATION_2'	=> 'et toutes les photos qu\'il contient ? Cette action est irréversible !',

			'DELETE_ALBUMS_QUESTION'		=> 'Supprimer les albums et leurs photos',
			'KEEP_ALBUMS'					=> 'Garder les albums',
			'DELETE_ALBUMS_CONFIRMATION_1'	=> 'Voulez-vous vraiment supprimer les ',
			'DELETE_ALBUMS_CONFIRMATION_2'	=> 'albums selectionnés et toutes leurs photos ? Cette action est irréversible !',

			'DELETE_UNSORTED_CONFIRM'		=> 'Voulez-vous vraiment supprimer toutes les photos de \'Non-triés\' ?<br>Cette action est irréversible !',
			'CLEAR_UNSORTED'				=> 'Vider Non-triés',
			'KEEP_UNSORTED'					=> 'Garder Non-triés',

			'EDIT_SHARING'					=> 'Editer le partage',
			'MAKE_PRIVATE'					=> 'Rendre privé',

			'CLOSE_ALBUM'					=> 'Fermer l\'album',
			'CLOSE_PHOTO'					=> 'Fermer la photo',

			'ADD'							=> 'Ajouter',
			'MOVE'							=> 'Déplacer',
			'MOVE_ALL'						=> 'Déplacer tout',
			'DUPLICATE'						=> 'Dupliquer',
			'DUPLICATE_ALL'					=> 'Dupliquer tout',
			'DELETE'						=> 'Supprimer',
			'DELETE_ALL'					=> 'Tout supprimer',
			'DOWNLOAD'						=> 'Télécharger original ',
			'DOWNLOAD_MEDIUM'				=> 'Télécharger moyen',
			'DOWNLOAD_SMALL'				=> 'Télécharger petit',
			'UPLOAD_PHOTO'					=> 'Ajouter une photo ou une vidéo',
			'IMPORT_LINK'					=> 'Importer depuis un lien',
			'IMPORT_DROPBOX'				=> 'Importer depuis Dropbox',
			'IMPORT_SERVER'					=> 'Importer depuis le serveur',
			'NEW_ALBUM'						=> 'Nouvel Album',

			'TITLE_NEW_ALBUM'			=> 'Entrez le titre du nouvel album :',
			'UNTITLED'					=> 'Sans-titre',
			'UNSORTED'					=> 'Non-triés',
			'STARRED'					=> 'Favoris',
			'RECENT'					=> 'Récent',
			'PUBLIC'					=> 'Public',
			'NUM_PHOTOS'				=> 'Photos',

			'CREATE_ALBUM'				=> 'Créer un album',

			'STAR_PHOTO'				=> 'Mettre en Favoris',
			'STAR'						=> 'Favori',
			'STAR_ALL'					=> 'Tout mettre en Favoris',
			'TAGS'						=> 'Étiquetter',
			'TAGS_ALL'					=> 'Tout étiquetter',
			'UNSTAR_PHOTO'				=> 'Retirer des Favoris',

			'FULL_PHOTO'				=> 'Taille réelle',
			'ABOUT_PHOTO'				=> 'À propos de la photo',
			'DIRECT_LINK'				=> 'Lien direct',

			'ALBUM_ABOUT'				=> 'À propos',
			'ALBUM_BASICS'				=> 'Informations de base',
			'ALBUM_TITLE'				=> 'Titre',
			'ALBUM_NEW_TITLE'			=> 'Entrez un nouveau titre pour cet album :',
			'ALBUMS_NEW_TITLE_1'		=> 'Entrez un titre pour les',
			'ALBUMS_NEW_TITLE_2'		=> 'albums sélectionnés :',
			'ALBUM_SET_TITLE'			=> 'Enregistrer le titre',
			'ALBUM_DESCRIPTION'			=> 'Description',
			'ALBUM_NEW_DESCRIPTION'		=> 'Entrez une nouvelle description pour cet album :',
			'ALBUM_SET_DESCRIPTION'		=> 'Choisir une description',
			'ALBUM_ALBUM'				=> 'Album',
			'ALBUM_CREATED'				=> 'Créé',
			'ALBUM_IMAGES'				=> 'Images',
			'ALBUM_SHARING'				=> 'Partager',
			'ALBUM_SHR_YES'				=> 'Oui',
			'ALBUM_SHR_NO'				=> 'Non',
			'ALBUM_PUBLIC'				=> 'Public',
			'ALBUM_HIDDEN'				=> 'Masqué',
			'ALBUM_HIDDEN_EXPL'			=> 'Seules les personnes avec le lien peuvent voir cet album.',
			'ALBUM_DOWNLOADABLE'		=> 'Téléchargeable',
			'ALBUM_DOWNLOADABLE_EXPL'	=> 'Les visiteurs peuvent télécharger cet album.',
			'ALBUM_PASSWORD'			=> 'Mot de passe',
			'ALBUM_PASSWORD_PROT'		=> 'Protéger par un mot de passe.',
			'ALBUM_PASSWORD_PROT_EXPL'	=> 'Cet album est accessible avec un mot de passe.',
			'ALBUM_PASSWORD_REQUIRED'	=> 'Cet album est protégé par mot de passe. Entrez le mot de passe pour afficher les photos de cet album :',
			'ALBUM_MERGE_1'				=> 'Voulez-vous vraiment fusionner l\'album',
			'ALBUM_MERGE_2'				=> 'dans l\'album', # `dans` est important car il indique la direction du merge
			'ALBUMS_MERGE'				=> 'Voulez-vous vraiment fusionner les albums selectionnés avec l\'album',
			'MERGE_ALBUM'				=> 'Fusionner les albums',
			'DONT_MERGE'				=> 'Ne pas fusionner.',

			'PHOTO_ABOUT'				=> 'À propos',
			'PHOTO_BASICS'				=> 'Informations de base',
			'PHOTO_TITLE'				=> 'Titre',
			'PHOTO_NEW_TITLE'			=> 'Entrer un nouveau titre pour cette photo :',
			'PHOTO_SET_TITLE'			=> 'Choisir un titre',
			'PHOTO_UPLOADED'			=> 'Téléversé',
			'PHOTO_DESCRIPTION'			=> 'Description',
			'PHOTO_NEW_DESCRIPTION'		=> 'Entrez une nouvelle description pour cette photo :',
			'PHOTO_SET_DESCRIPTION'		=> 'Choisir une description',
			'PHOTO_IMAGE'				=> 'Image',
			'PHOTO_SIZE'				=> 'Dimension',
			'PHOTO_FORMAT'				=> 'Format',
			'PHOTO_RESOLUTION'			=> 'Résolution',
			'PHOTO_TAGS'				=> 'Étiquettes',
			'PHOTO_NOTAGS'				=> 'Pas d\'étiquette',
			'PHOTO_NEW_TAGS'			=> 'Entrez vos étiquettes pour cette photo. Vous pouvez ajouter plusieurs étiquettes en les séparant avec une virgule :',
			'PHOTO_NEW_TAGS_1'			=> 'Entrez vos étiquettes pour toutes les',
			'PHOTO_NEW_TAGS_2'			=> 'photos selectionnées. Les étiquettes existantes seront remplacées. Vous pouvez ajouter plusieurs étiquettes en les séparant avec une virgule :',
			'PHOTO_SET_TAGS'			=> 'Établir les étiquettes',
			'PHOTO_CAMERA'				=> 'Appareil',
			'PHOTO_CAPTURED'			=> 'Date d\'enregistrement',
			'PHOTO_MAKE'				=> 'Prendre une photo',
			'PHOTO_TYPE'				=> 'Type',
			'PHOTO_SHUTTER'				=> 'Durée d\'exposition',
			'PHOTO_APERTURE'			=> 'Ouverture',
			'PHOTO_FOCAL'				=> 'Distance focale',
			'PHOTO_ISO'					=> 'ISO',
			'PHOTO_SHARING'				=> 'Partager',
			'PHOTO_SHR_PLUBLIC'			=> 'Publique',
			'PHOTO_SHR_ALB'				=> 'Oui (album)',
			'PHOTO_SHR_PHT'				=> 'Oui (photo)',
			'PHOTO_SHR_NO'				=> 'Non',
			'PHOTO_DELETE'				=> 'Supprimer la photo',
			'PHOTO_KEEP'				=> 'Garder la photo',
			'PHOTO_DELETE_1'			=> 'Voulez-vous vraiment supprimer la photo ?',
			'PHOTO_DELETE_2'			=> 'Cette action est irréversible !',
			'PHOTO_DELETE_ALL_1'		=> 'Voulez-vous vraiment supprimer toutes les',
			'PHOTO_DELETE_ALL_2'		=> 'photos sélectionnées ? Cette action est irréversible !',
			'PHOTO_NEW_TITLE'			=> 'Entrer un nouveau titre pour cette photo :',
			'PHOTOS_NEW_TITLE_1'		=> 'Entrer un titre pour toutes les',
			'PHOTOS_NEW_TITLE_2'		=> 'photos sélectionnées :',
			'PHOTO_MAKE_PRIVATE_ALBUM'	=> 'Cette photo est située dans un album public. Pour rendre cette photo privée ou publique, modifiez la visibilité de l\'album associé.',
			'PHOTO_SHOW_ALBUM'			=> 'Afficher l\'album',

			'LOADING'					=> 'Chargement en cours',
			'ERROR'						=> 'Erreur',
			'ERROR_TEXT'				=> 'Il semble qu\'une erreur soit survenue. Veuillez rafraichir la page et réessayer !',
			'ERROR_DB_1'				=> 'Connexion impossible à la base de données car l\'accès a été refusé. Vérifiez votre nom d\'hôte, nom d\'utilisateur et mot de passe, et assurez-vous que l\'accès est autorisé à partir de votre emplacement actuel.',
			'ERROR_DB_2'				=> 'Impossible de creer la base de données. Verifiez votre nom d\'hôte, nom d\'utilisateur et mot de passe, et assurez-vous que l\'utilisateur specifié est autorisé à modifier et ajouter du contenu dans la base de données.',
			'ERROR_CONFIG_FILE'			=> "Impossible d\'enregistrer cette configuration. Permission refusée dans <b>'data/'</b>. Veuillez paramétrer les droits de lecture, d\'ecriture et d\'exécution pour les autres utilisateurs dans <b>'data/'</b> et <b>'uploads/'</b>. Consultez le fichier Readme pour obtenir plus d\'information.",
			'ERROR_UNKNOWN'				=> 'Une erreur inattendue est survenue. Veuillez réessayer et vérifier votre installation et votre serveur. Consultez le fichier Readme pour obtenir plus d\'information.',
			'ERROR_LOGIN'				=> 'Impossible d\'enregistrer les informations de connexion. Veuillez réessayer avec un autre nom d\'utilisateur et mot de passe.',
			'RETRY'						=> 'Réessayer',

			'DB_INFO_TITLE'				=> 'Entrez vos identifiants de connexion à la base de données ci-dessous :',
			'DB_INFO_HOST'				=> 'Hôte de la base de donnees (facultatif)',
			'DB_INFO_USER'				=> 'Nom d\'utilisateur pour la base de données',
			'DB_INFO_PASSWORD'			=> 'Mot de passe pour la base de données',
			'DB_INFO_TEXT'				=> 'Lychee va créer sa propre base de données. Si vous le souhaitez, vous pouvez entrer le nom d\'une base de données existante à la place :',
			'DB_NAME'					=> 'Nom de la base de données (facultatif)',
			'DB_PREFIX'					=> 'Préfixe de la table (facultatif)',
			'DB_CONNECT'				=> 'Connexion',

			'LOGIN_TITLE'				=> 'Entrez un nom d\'utilisateur et un mot de passe pour votre installation :',
			'LOGIN_USERNAME'			=> 'Nouvel utilisateur',
			'LOGIN_PASSWORD'			=> 'Nouveau mot de passe',
			'LOGIN_CREATE'				=> 'Créer les informations de connexion',

			'PASSWORD_TITLE'			=> 'Entrez votre mot de passe existant :',
			'PASSWORD_CURRENT'			=> 'Mot de passe existant',
			'PASSWORD_TEXT'				=> 'Votre nom d\'utilisateur et votre mot de passe seront modifiés comme suit :',
			'PASSWORD_CHANGE'			=> 'Modifier les informations de connexion',

			'EDIT_SHARING_TITLE'		=> 'Modifier le partage',
			'EDIT_SHARING_TEXT'			=> 'Les propriétés de partage de cet album vont etre modifiées comme suit :',
			'SHARE_ALBUM_TEXT'			=> 'Cet album sera partagé avec les propriétés suivantes :',

			'SORT_ALBUM_BY_1'			=> 'Trier les albums',
			'SORT_ALBUM_BY_2'			=> 'dans l\'ordre',
			'SORT_ALBUM_BY_3'			=> '.',

			'SORT_ALBUM_SELECT_1'		=> 'Heure de création',
			'SORT_ALBUM_SELECT_2'		=> 'Titre',
			'SORT_ALBUM_SELECT_3'		=> 'Description',
			'SORT_ALBUM_SELECT_4'		=> 'Public',
			'SORT_ALBUM_SELECT_5'		=> 'Date de création la plus récente',
			'SORT_ALBUM_SELECT_6'		=> 'Date de création la plus ancienne',


			'SORT_PHOTO_BY_1'			=> 'Trier les photos',
			'SORT_PHOTO_BY_2'			=> 'dans l\'ordre',
			'SORT_PHOTO_BY_3'			=> '.',

			'SORT_PHOTO_SELECT_1'		=> 'Heure du téléversement',
			'SORT_PHOTO_SELECT_2'		=> 'Date de création',
			'SORT_PHOTO_SELECT_3'		=> 'Titre',
			'SORT_PHOTO_SELECT_4'		=> 'Description',
			'SORT_PHOTO_SELECT_5'		=> 'Public',
			'SORT_PHOTO_SELECT_6'		=> 'Favoris',
			'SORT_PHOTO_SELECT_7'		=> 'Format de la photo',

			'SORT_ASCENDING'			=> 'Croissant',
			'SORT_DESCENDING'			=> 'Décroissant',
			'SORT_CHANGE'				=> 'Modifier le tri',

			'DROPBOX_TITLE'				=> 'Définir une clé Dropbox',
			'DROPBOX_TEXT'				=> "Pour pouvoir importer des photos à partir de votre Dropbox, vous aurez besoin d\'une clé d\'application \"drop-ins\" valide à créer sur <a href='https://www.dropbox.com/developers/apps/create'>leur site</a>. Générez votre clé personnelle et puis entrez-la ci-dessous:",

			'VIEW_NO_RESULT'			=> 'Aucun résultat',
			'VIEW_NO_PUBLIC_ALBUMS'		=> 'Aucun album public',
			'VIEW_NO_CONFIGURATION'		=> 'Aucune configuration',
			'VIEW_PHOTO_NOT_FOUND'		=> 'Photo introuvable',

			'NO_TAGS'					=> 'Aucune étiquette',

			'UPLOAD_MANAGE_NEW_PHOTOS'	=> 'Vous pouvez désormais gérer vos nouvelles photos.',
			'UPLOAD_COMPLETE'			=> 'Téléversement terminé',
			'UPLOAD_COMPLETE_FAILED'	=> 'Le téléversement d\'une ou plusieurs photos a échoué.',
			'UPLOAD_IMPORTING'			=> 'Importation',
			'UPLOAD_IMPORTING_URL'		=> 'Importation depuis l\'URL',
			'UPLOAD_UPLOADING'			=> 'Téléversement en cours',
			'UPLOAD_FINISHED'			=> 'Terminé',
			'UPLOAD_PROCESSING'			=> 'Traitement',
			'UPLOAD_FAILED'				=> 'Échec',
			'UPLOAD_FAILED_ERROR'		=> 'Échec du téléversement. Le serveur a retourné une erreur !',
			'UPLOAD_FAILED_WARNING'		=> 'Échec du téléversement. Le serveur a retourné un avertissement !',
			'UPLOAD_SKIPPED'			=> 'Ignoré',
			'UPLOAD_ERROR_CONSOLE'		=> 'Veuillez consulter la console de votre navigateur pour obtenir plus de détails.',
			'UPLOAD_UNKNOWN'			=> 'Le serveur a retourné une reponse inconnue. Veuillez consulter la console de votre navigateur pour obtenir plus de détails.',
			'UPLOAD_ERROR_UNKNOWN'		=> 'Échec du téléversement. Le serveur a retourné une erreur inconnue !',
			'UPLOAD_IN_PROGRESS'		=> 'Lychee est en cours de téléchargement !',
			'UPLOAD_IMPORT_WARN_ERR'	=> 'L\'importation est terminée, mais des erreurs ou des avertissements ont été retournés. Veuillez consulter le fichier de Log (Paramètres -> Afficher les logs) pour obtenir plus de détails.',
			'UPLOAD_IMPORT_COMPLETE'	=> 'Importation terminée',
			'UPLOAD_IMPORT_INSTR'		=> 'Veuillez entrer un lien direct vers une photo pour l\'importer :',
			'UPLOAD_IMPORT'				=> 'Importer',
			'UPLOAD_IMPORT_SERVER'		=> 'Importation à partir du serveur',
			'UPLOAD_IMPORT_SERVER_FOLD'	=> 'Dossier vide ou aucun fichier lisible à traiter. Veuillez consulter le journal (Paramètres -> Afficher le journal) pour obtenir plus de détails.',
			'UPLOAD_IMPORT_SERVER_INSTR'=> 'Cette action importera toutes les photos ainsi que tous les dossiers et sous-dossiers situés dans le répertoire suivant. Les <b>fichiers originaux seront supprimés</b> après l\'importation lorsque cela est possible.',
			'UPLOAD_ABSOLUTE_PATH'		=> 'Chemin absolu du répertoire',
			'UPLOAD_IMPORT_SERVER_EMPT'	=> 'Impossible de démarrer l\'importation car le dossier était vide !'
		);

		return $locale;
	}
}
