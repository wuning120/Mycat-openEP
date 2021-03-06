<?php
// **********************************************************************
//
// Copyright (c) 2003-2013 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.5.1
//
// <auto-generated>
//
// Generated from file `Session.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Glacier2/Session.php';
    require_once 'IceGrid/Exception.php';
}

namespace IceGrid
{
    if(!interface_exists('\\IceGrid\\Session'))
    {
        interface Session extends \Glacier2\Session
        {
            public function keepAlive();
            public function allocateObjectById($id);
            public function allocateObjectByType($type);
            public function releaseObject($id);
            public function setAllocationTimeout($timeout);
        }

        class SessionPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::IceGrid::Session', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::IceGrid::Session', $facet);
            }
        }

        $IceGrid__t_Session = IcePHP_defineClass('::IceGrid::Session', '\\IceGrid\\Session', -1, true, false, $Ice__t_Object, array($Glacier2__t_Session), null);

        $IceGrid__t_SessionPrx = IcePHP_defineProxy($IceGrid__t_Session);

        IcePHP_defineOperation($IceGrid__t_Session, 'keepAlive', 2, 2, 0, null, null, null, null);
        IcePHP_defineOperation($IceGrid__t_Session, 'allocateObjectById', 0, 0, 0, array(array($Ice__t_Identity, false, 0)), null, array($Ice__t_ObjectPrx, false, 0), array($IceGrid__t_ObjectNotRegisteredException, $IceGrid__t_AllocationException));
        IcePHP_defineOperation($IceGrid__t_Session, 'allocateObjectByType', 0, 0, 0, array(array($IcePHP__t_string, false, 0)), null, array($Ice__t_ObjectPrx, false, 0), array($IceGrid__t_AllocationException));
        IcePHP_defineOperation($IceGrid__t_Session, 'releaseObject', 0, 0, 0, array(array($Ice__t_Identity, false, 0)), null, null, array($IceGrid__t_ObjectNotRegisteredException, $IceGrid__t_AllocationException));
        IcePHP_defineOperation($IceGrid__t_Session, 'setAllocationTimeout', 2, 2, 0, array(array($IcePHP__t_int, false, 0)), null, null, null);
    }
}
?>
