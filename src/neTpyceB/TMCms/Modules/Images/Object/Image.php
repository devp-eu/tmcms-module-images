<?php
namespace neTpyceB\TMCms\Modules\Images\Object;

use neTpyceB\TMCms\Modules\Entity;

/**
 * Class Image
 * @package neTpyceB\TMCms\Modules\Images\Object
 * @method string getImage()
 * @method string getItemType()
 * @method int getItemId()
 * @method int getOrder()
 *
 * @method setImage(string)
 * @method setItemType(string)
 * @method setItemId(int)
 * @method setOrder(int)
 */
class Image extends Entity {
    protected $db_table = 'm_images';

    public function deleteObject() {
        // Remove file itself
        if (file_exists(DIR_BASE . $this->getImage())) unlink(DIR_BASE . $this->getImage());

        parent::deleteObject();
    }
}