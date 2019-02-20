<?php

namespace Bluesquare\StorageBundle\Adaptors;

use Aws\S3\S3Client;

/**
 * Interface de manipulation des stockages préconfigurés
 * Usage par injection
 */
class Storage
{
    public function get($storage_name)
    {
        // TODO: on récupère les infos sur ce storage dans la config utilisateur (config/bluesquare/storage.yaml)
        // La clef pour la configuration d'un storage devrait être : "storage.{storage_name}"

        dump($storage_name); die;
        // Si storage.{storage_name}.type == 's3' alors :
//            return new S3Storage($storage_name, $config); // $config c'est le contenu de storage.{storage_name} sous forme de tableau

        // Sinon :
        return null; // (on ajoutera d'autres types de stockage plus tard, dont le stockage de fichier sur le serveur actuel)
    }
}

//storage:
//photos:
//      type: s3
//      bucket: bluesquare.public
//      region: nl-ams
//      endpoint: 'https://s3.nl-ams.scw.cloud'
//      credentials:
//          key: '%env(MYSUPERSECRETAWSKEY)%'
//          secret: '%env(MYSUPERSECRETAWSSECRET)%'
//      version: lastest # optionnel
//      path: '/photos' # optionnel
//
//  files:
//    type: s3
//    bucket: bluesquare.private
//    region: nl-ams
//    endpoint: 'https://s3.nl-ams.scw.cloud'
//    credentials:
//      key: '%env(MYSUPERSECRETAWSKEY)%'
//      secret: '%env(MYSUPERSECRETAWSSECRET)%'
//
//  ...