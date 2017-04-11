<?php
/**
 * FlexiPeeHP - Objekt kontaktu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Příloha
 *
 * @link https://www.flexibee.eu/api/dokumentace/ref/attachments/
 * @link https://demo.flexibee.eu/c/demo/priloha/properties
 */
class Priloha extends FlexiBeeRW
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'priloha';

    /**
     * Evidence s přílohami
     *
     * @var array
     */
    public static $relatedEvidence = [
        'prodejka' => 'doklFak', 'pohledavka' => 'doklFak', 'zavazek' => 'doklFak',
        'faktura-prijata' => 'doklFak', 'faktura-vydana' => 'doklFak',
        'interni-doklad' => 'doklInt', 'pokladni-pohyb' => 'doklInt', 'vzajemny-zapocet' => 'doklInt',
        'banka' => 'doklInt',
        'poptavka-vydana' => 'doklObch', 'poptavka-prijata' => 'doklObch', 'objednavka-prijata' => 'doklObch',
        'nabidka-vydana' => 'doklObch',
        'objednavka-vydana' => 'doklObch', 'nabidka-prijata' => 'doklObch',
        'skladovy-pohyb' => 'doklSklad',
        'cenik' => 'cenik',
        'adresar' => 'adresar', 'kontakt' => 'kontakt'
    ];

    /**
     * Přilož Soubor
     *
     * @param string $filepath
     * @param array  $attachmentData
     */
    public function attachFile($filepath, $attachmentData = [])
    {
        if (file_exists($filepath)) {
            $attachmentData['nazSoub']     = basename($filepath);
            $attachmentData['contentType'] = mime_content_type($filepath);
            $attachmentData['dataSize']    = filesize($filepath);
            $attachmentData['dataHash']    = md5_file($filepath);

            switch ($attachmentData['contentType']) {
                case 'image/png':
                case 'image/gif':
                case 'image/jpeg':

                    break;
            }
            $attachmentData['content'] = base64_encode(file_get_contents($filepath));
        }
    }

    /**
     * Obtain url for Attachment Download
     *
     * @return string url
     */
    public static function getDownloadUrl($object)
    {
        return $object->apiURL.'/content';
    }

    /**
     * Obtain first attachment for given object
     *
     * @param  FlexiBeeRO $object
     * @return array
     */
    public static function getFirstAttachment($object)
    {
        $attachments = self::getAttachmentsList($object);
        return count($attachments) ? current($attachments) : null;
    }

    /**
     * Send "download" headers first and then file itself
     *
     * @param FlexiBeeRO $object
     * @param int|string $attachmentID
     */
    public static function download($object, $attachmentID = null)
    {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Disposition: attachment; filename='.$object->getName().'_nrpe.sh');
        header('Content-Length: '.strlen($nrpesh));
        echo $object;
    }

    public static function saveToFile($object, $filename, $attachmentID = null)
    {

    }

    /**
     * Add Attachment from File
     *
     * @param FlexiBeeRW $object
     * @param string     $filename
     *
     * @return int      HTTP response code
     */
    public static function addAttachmentFromFile($object, $filename)
    {
        return self::addAttachment($object, basename($filename),
                file_get_contents($filename), mime_content_type($filename));
    }

    /**
     * Add Attachment related to current $object content
     *
     * @param FlexiBeeRW $object
     * @param string $filename
     * @param string $attachment Body
     * @param string $contentType Attachment Content-Type
     *
     * @return int HTTP Response code
     */
    public static function addAttachment($object, $filename, $attachment,
                                         $contentType)
    {
        $headersBackup                              = $object->defaultHttpHeaders;
        $object->postFields                         = $attachment;
        $object->defaultHttpHeaders['Content-Type'] = $contentType;
        $url                                        = $object->getFlexiBeeURL().'/prilohy/new/'.$filename;
        $response                                   = $object->doCurlRequest($url,
            'PUT');
        $object->defaultHttpHeaders                 = $headersBackup;
        return $response;
    }

    /**
     * Obtain Record related attachments list
     *
     * @param FlexiBeeRO $object
     * @return array
     */
    public static function getAttachmentsList($object)
    {
        $fburl       = $object->getFlexiBeeURL();
        $attachments = $object->getFlexiData($fburl.'/prilohy');
        if (count($attachments)) {
            foreach ($attachments as $attachmentID => $attachmentData) {
                $attachments[$attachmentID]['url'] = $object->url.'/c/'.$object->company.'/priloha/'.$attachmentData['id'];
            }
        }
        return $attachments;
    }

}
