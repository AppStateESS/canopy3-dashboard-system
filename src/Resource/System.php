<?php
declare(strict_types=1);
/**
 * MIT License
 * Copyright (c) 2021 Electronic Student Services @ Appalachian State University
 *
 * See LICENSE file in root directory for copyright and distribution permissions.
 *
 * @author
 * @license https://opensource.org/licenses/MIT
 */

namespace Dashboard\System\Resource;
/**
 * @table system 
 */
class System extends \Canopy3\AbstractResource
{
    /**
     * @var string
     */
    private string $directory;

    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $type;

    /**
     * @var string
     */
    private string $version;

    /**
     * @returns string
     */
    public function getDirectory() : string
    {
        return $this->directory;
    }

    /**
     * @returns string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @returns string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @returns string
     */
    public function getVersion() : string
    {
        return $this->version;
    }

    /**
     * @param string $directory
     */
    public function setDirectory(string $directory)
    {
        $this->directory = $directory;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
    }

}