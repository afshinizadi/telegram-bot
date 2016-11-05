<?php

namespace Telegram\Bot\Objects;

/**
 * Class Chat.
 *
 *
 * @method int      getId()                           Unique identifier for this chat, not exceeding 1e13 by absolute value.
 * @method string   getType()                         Type of chat, can be either 'private', 'group', 'supergroup' or 'channel'.
 * @method string   getTitle()                        (Optional). Title, for channels and group chats.
 * @method string   getUsername()                     (Optional). Username, for private chats and channels if available
 * @method string   getFirstName()                    (Optional). First name of the other party in a private chat
 * @method string   getLastName()                     (Optional). Last name of the other party in a private chat
 * @method bool     getAllMembersAreAdministrators()  (Optional). True if a group has ‘All Members Are Admins’ enabled.
 */
class Chat extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return [];
    }

    /**
     * Check if this is a private chat.
     *
     * @return bool
     */
    public function isPrivate()
    {
        return $this->getType() == 'private';
    }
}
