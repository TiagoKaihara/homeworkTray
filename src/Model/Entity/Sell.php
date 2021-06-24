<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sell Entity
 *
 * @property int $id
 * @property int $seller_id
 * @property string $title
 * @property float $price
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Seller $seller
 */
class Sell extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'seller_id' => true,
        'title' => true,
        'price' => true,
        'created' => true,
        'modified' => true,
        'seller' => true,
    ];
}
