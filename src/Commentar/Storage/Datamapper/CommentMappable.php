<?php
/**
 * Interface for comment datamappers
 *
 * PHP version 5.4
 *
 * @category   Commentar
 * @package    Storage
 * @subpackage Datamapper
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace Commentar\Storage\Datamapper;

use Commentar\DomainObject\Comment as CommentDomainObject;

/**
 * Interface for comment datamappers
 *
 * @category   Commentar
 * @package    Storage
 * @subpackage Datamapper
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
interface CommentMappable
{
    /**
     * Fetches all comments based on the post id
     *
     * @param mixed $postId The id of the post of which to fetch the comments
     *
     * @return array List of all the comments on the post
     */
    public function fetchByPostId($id);

    /**
     * Persists the data of the comment in the storage file
     *
     * @param \Commentar\DomainObject\Comment $comment The comment to store
     */
    public function persist(CommentDomainObject $comment);
}
