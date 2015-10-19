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
// Generated from file `Router.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Ice/BuiltinSequences.php';
}

namespace Ice
{
    if(!interface_exists('\\Ice\\Router'))
    {
        interface Router
        {
            public function getClientProxy();
            public function getServerProxy();
            public function addProxy($proxy);
            public function addProxies($proxies);
        }

        class RouterPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::Ice::Router', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::Ice::Router', $facet);
            }
        }

        $Ice__t_Router = IcePHP_defineClass('::Ice::Router', '\\Ice\\Router', -1, true, false, $Ice__t_Object, null, null);

        $Ice__t_RouterPrx = IcePHP_defineProxy($Ice__t_Router);

        IcePHP_defineOperation($Ice__t_Router, 'getClientProxy', 2, 1, 0, null, null, array($Ice__t_ObjectPrx, false, 0), null);
        IcePHP_defineOperation($Ice__t_Router, 'getServerProxy', 2, 1, 0, null, null, array($Ice__t_ObjectPrx, false, 0), null);
        IcePHP_defineOperation($Ice__t_Router, 'addProxy', 2, 2, 0, array(array($Ice__t_ObjectPrx, false, 0)), null, null, null);
        IcePHP_defineOperation($Ice__t_Router, 'addProxies', 2, 2, 0, array(array($Ice__t_ObjectProxySeq, false, 0)), null, array($Ice__t_ObjectProxySeq, false, 0), null);
    }
}
?>