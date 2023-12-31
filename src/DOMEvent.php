<?php

namespace Hahadu\PhpQuerySingle;

/**
 * DOMEvent class.
 *
 * Based on
 * @link http://developer.mozilla.org/En/DOM:event
 * @author Tobiasz Cudnik <tobiasz.cudnik/gmail.com>
 * @package phpQuery
 * @todo implement ArrayAccess ?
 */
class DOMEvent {
    /**
     * Returns a boolean indicating whether the event bubbles up through the DOM or not.
     *
     * @var mixed
     */
    public $bubbles = true;
    /**
     * Returns a boolean indicating whether the event is cancelable.
     *
     * @var mixed
     */
    public $cancelable = true;
    /**
     * Returns a reference to the currently registered target for the event.
     *
     * @var mixed
     */
    public $currentTarget;
    /**
     * Returns detail about the event, depending on the type of event.
     *
     * @var mixed
     * @link http://developer.mozilla.org/en/DOM/event.detail
     */
    public $detail;	// ???
    /**
     * Used to indicate which phase of the event flow is currently being evaluated.
     *
     * NOT IMPLEMENTED
     *
     * @var mixed
     * @link http://developer.mozilla.org/en/DOM/event.eventPhase
     */
    public $eventPhase;	// ???
    /**
     * The explicit original target of the event (Mozilla-specific).
     *
     * NOT IMPLEMENTED
     *
     * @var mixed
     */
    public $explicitOriginalTarget; // moz only
    /**
     * The original target of the event, before any retargetings (Mozilla-specific).
     *
     * NOT IMPLEMENTED
     *
     * @var mixed
     */
    public $originalTarget;	// moz only
    /**
     * Identifies a secondary target for the event.
     *
     * @var mixed
     */
    public $relatedTarget;
    /**
     * Returns a reference to the target to which the event was originally dispatched.
     *
     * @var mixed
     */
    public $target;
    /**
     * Returns the time that the event was created.
     *
     * @var mixed
     */
    public $timeStamp;
    /**
     * Returns the name of the event (case-insensitive).
     */
    public $type;
    public $runDefault = true;
    public $data = null;
    public function __construct($data) {
        foreach($data as $k => $v) {
            $this->$k = $v;
        }
        if (! $this->timeStamp)
            $this->timeStamp = time();
    }
    /**
     * Cancels the event (if it is cancelable).
     *
     */
    public function preventDefault() {
        $this->runDefault = false;
    }
    /**
     * Stops the propagation of events further along in the DOM.
     *
     */
    public function stopPropagation() {
        $this->bubbles = false;
    }
}
