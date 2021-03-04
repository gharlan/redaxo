<?php

/**
 * Erstellt einen Filename der eindeutig ist für den Medienpool.
 *
 * @param string $FILENAME      Dateiname
 * @param bool   $doSubindexing
 *
 * @return string
 *
 * @deprecated
 */
function rex_mediapool_filename($FILENAME, $doSubindexing = true)
{
    return rex_mediapool::filename($FILENAME, $doSubindexing);
}

/**
 * Holt ein upgeloadetes File und legt es in den Medienpool
 * Dabei wird kontrolliert ob das File schon vorhanden ist und es
 * wird eventuell angepasst, weiterhin werden die Fileinformationen übergeben.
 *
 * @param array  $FILE
 * @param int    $rexFileCategory
 * @param array  $FILEINFOS
 * @param string $userlogin
 * @param bool   $doSubindexing
 *
 * @return array
 *
 * @deprecated
 */
function rex_mediapool_saveMedia($FILE, $rexFileCategory, $FILEINFOS, $userlogin = null, $doSubindexing = true)
{
    return rex_media_service::addMedia($FILE, ['categories' => $rexFileCategory], $FILEINFOS, $userlogin, $doSubindexing);
}

/**
 * Holt ein upgeloadetes File und legt es in den Medienpool
 * Dabei wird kontrolliert ob das File schon vorhanden ist und es
 * wird eventuell angepasst, weiterhin werden die Fileinformationen übergeben.
 *
 * @param array  $FILE
 * @param array  $FILEINFOS
 * @param string $userlogin
 *
 * @return array
 */
function rex_mediapool_updateMedia($FILE, &$FILEINFOS, $userlogin = null)
{
    return rex_media_service::updateMedia($FILE, $FILEINFOS, $userlogin);
}

/**
 * @param string $filename
 *
 * @return array
 *
 * @psalm-return array{ok: bool, msg: string}
 *
 * @deprecated
 */
function rex_mediapool_deleteMedia($filename)
{
    return rex_media_service::deleteMedia($filename);
}

/**
 * @param string $filename
 *
 * @return bool|string
 *
 * @deprecated
 */
function rex_mediapool_mediaIsInUse($filename)
{
    return rex_mediapool::mediaIsInUse($filename);
}

/**
 * Synchronisiert die Datei $physical_filename des Mediafolders in den
 * Medienpool.
 *
 * @param string      $physicalFilename
 * @param int         $categoryId
 * @param string      $title
 * @param null|int    $filesize
 * @param null|string $filetype
 * @param null|string $userlogin
 *
 * @return array
 *
 * @deprecated
 */
function rex_mediapool_syncFile($physicalFilename, $categoryId, $title, $filesize = null, $filetype = null, $userlogin = null)
{
    rex_mediapool::syncFile($physicalFilename, ['categories' => $categoryId], $title, $filesize, $filetype, $userlogin);
}
