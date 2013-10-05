<?php
/**
 * Delete confirmation view
 *
 * PHP version 5.4
 *
 * @category   Commentar
 * @package    Presentation
 * @subpackage View
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace Commentar\Presentation\View;

/**
 * Delete confirmation view
 *
 * @category   Commentar
 * @package    Presentation
 * @subpackage View
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class DeleteResult extends View
{
    /**
     * Renders the template of the view
     *
     * @return string The rendered template
     */
    public function renderTemplate()
    {
        return $this->getContent($this->theme->getFile('blocks/comment-delete-result.pjson'));
    }
}
