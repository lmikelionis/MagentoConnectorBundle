<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\MagentoConnectorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity for table "cms_page_store".
 *
 * @ORM\MappedSuperclass
 */
abstract class CmsPageStore
{
    /**
     * @var int
     *
     * @ORM\Column(name="page_id", type="integer")
     * @ORM\Id
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer")
     */
    protected $storeId;

    /**
     * @var CmsPage
     *
     * @ORM\ManyToOne(targetEntity="CmsPage", inversedBy="stores")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="page_id")
     */
    protected $page;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return CmsPage
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param CmsPage $page
     *
     * @return self
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return int
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }
}
