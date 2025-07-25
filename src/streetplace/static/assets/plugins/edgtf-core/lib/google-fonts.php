<?php
if (!function_exists('hyperon_edgtf_init_google_fonts_array')) {
    function hyperon_edgtf_init_google_fonts_array() {

        global $hyperon_edgtf_fonts_array;
        $google_fonts_json = '
        {
         "kind": "webfonts#webfontList",
         "items": [
          {
           "kind": "webfonts#webfont",
           "family": "ABeeZee",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/abeezee/v11/mE5BOuZKGln_Ex0uYKpIaw.ttf",
            "italic": "http://fonts.gstatic.com/s/abeezee/v11/kpplLynmYgP0YtlJA3atRw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Abel",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/abel/v8/RpUKfqNxoyNe_ka23bzQ2A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Abhaya Libre",
           "category": "serif",
           "variants": [
            "regular",
            "500",
            "600",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "sinhala"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/abhayalibre/v3/zTLc5Jxv6yvb1nHyqBasVy3USBnSvpkopQaUR-2r7iU.ttf",
            "500": "http://fonts.gstatic.com/s/abhayalibre/v3/wBjdF6T34NCo7wQYXgzrc5MQuUSAwdHsY8ov_6tk1oA.ttf",
            "600": "http://fonts.gstatic.com/s/abhayalibre/v3/wBjdF6T34NCo7wQYXgzrc2v8CylhIUtwUiYO7Z2wXbE.ttf",
            "700": "http://fonts.gstatic.com/s/abhayalibre/v3/wBjdF6T34NCo7wQYXgzrc0D2ttfZwueP-QU272T9-k4.ttf",
            "800": "http://fonts.gstatic.com/s/abhayalibre/v3/wBjdF6T34NCo7wQYXgzrc_qsay_1ZmRGmC8pVRdIfAg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Abril Fatface",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/abrilfatface/v9/X1g_KwGeBV3ajZIXQ9VnDojjx0o0jr6fNXxPgYh_a8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Aclonica",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/aclonica/v8/M6pHZMPwK3DiBSlo3jwAKQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Acme",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/acme/v7/-J6XNtAHPZBEbsifCdBt-g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Actor",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/actor/v7/ugMf40CrRK6Jf6Yz_xNSmQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Adamina",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/adamina/v10/RUQfOodOMiVVYqFZcSlT9w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Advent Pro",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "greek"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/adventpro/v7/87-JOpSUecTG50PBYK4ysi3USBnSvpkopQaUR-2r7iU.ttf",
            "200": "http://fonts.gstatic.com/s/adventpro/v7/URTSSjIp0Wr-GrjxFdFWnGeudeTO44zf-ht3k-KNzwg.ttf",
            "300": "http://fonts.gstatic.com/s/adventpro/v7/sJaBfJYSFgoB80OL1_66m0eOrDcLawS7-ssYqLr2Xp4.ttf",
            "regular": "http://fonts.gstatic.com/s/adventpro/v7/1NxMBeKVcNNH2H46AUR3wfesZW2xOQ-xsNqO47m55DA.ttf",
            "500": "http://fonts.gstatic.com/s/adventpro/v7/7kBth2-rT8tP40RmMMXMLJp-63r6doWhTEbsfBIRJ7A.ttf",
            "600": "http://fonts.gstatic.com/s/adventpro/v7/3Jo-2maCzv2QLzQBzaKHV_pTEJqju4Hz1txDWij77d4.ttf",
            "700": "http://fonts.gstatic.com/s/adventpro/v7/M4I6QiICt-ey_wZTpR2gKwJKKGfqHaYFsRG-T3ceEVo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Aguafina Script",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/aguafinascript/v6/65g7cgMtMGnNlNyq_Z6CvMxLhO8OSNnfAp53LK1_iRs.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Akronim",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/akronim/v7/qA0L2CSArk3tuOWE1AR1DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Aladin",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/aladin/v6/PyuJ5cVHkduO0j5fAMKvAA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Aldrich",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/aldrich/v8/kMMW1S56gFx7RP_mW1g-Eg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Alef",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "hebrew",
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/alef/v9/ENvZ_P0HBDQxNZYCQO0lUA.ttf",
            "700": "http://fonts.gstatic.com/s/alef/v9/VDgZJhEwudtOzOFQpZ8MEA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Alegreya",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v10",
           "lastModified": "2017-11-07",
           "files": {
            "regular": "http://fonts.gstatic.com/s/alegreya/v10/62J3atXd6bvMU4qO_ca-eA.ttf",
            "italic": "http://fonts.gstatic.com/s/alegreya/v10/cbshnQGxwmlHBjUil7DaIfesZW2xOQ-xsNqO47m55DA.ttf",
            "500": "http://fonts.gstatic.com/s/alegreya/v10/nJhRg_-uQMATei4qNxTyLKCWcynf_cDxXwCLxiixG1c.ttf",
            "500italic": "http://fonts.gstatic.com/s/alegreya/v10/baLsZTz4WeQ1BZAOY-Ma_Zp-63r6doWhTEbsfBIRJ7A.ttf",
            "700": "http://fonts.gstatic.com/s/alegreya/v10/5oZtdI5-wQwgAFrd9erCsaCWcynf_cDxXwCLxiixG1c.ttf",
            "700italic": "http://fonts.gstatic.com/s/alegreya/v10/IWi8e5bpnqhMRsZKTcTUWgJKKGfqHaYFsRG-T3ceEVo.ttf",
            "800": "http://fonts.gstatic.com/s/alegreya/v10/QzI8vcYBhKwi_ircxzgm66CWcynf_cDxXwCLxiixG1c.ttf",
            "800italic": "http://fonts.gstatic.com/s/alegreya/v10/zBzWGwjiXVY_eRAcMxLbPKk3bhPBSBJ0bSJQ6acL-0g.ttf",
            "900": "http://fonts.gstatic.com/s/alegreya/v10/oQeMxX-vxGImzDgX6nxA7KCWcynf_cDxXwCLxiixG1c.ttf",
            "900italic": "http://fonts.gstatic.com/s/alegreya/v10/-L71QLH_XqgYWaI1GbOVhp0EAVxt0G0biEntp43Qt6E.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Alegreya SC",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-11-07",
           "files": {
            "regular": "http://fonts.gstatic.com/s/alegreyasc/v9/3ozeFnTbygMK6PfHh8B-iqCWcynf_cDxXwCLxiixG1c.ttf",
            "italic": "http://fonts.gstatic.com/s/alegreyasc/v9/GOqmv3FLsJ2r6ZALMZVBmkeOrDcLawS7-ssYqLr2Xp4.ttf",
            "500": "http://fonts.gstatic.com/s/alegreyasc/v9/M9OIREoxDkvynwTpBAYUq8CNfqCYlB_eIx7H1TVXe60.ttf",
            "500italic": "http://fonts.gstatic.com/s/alegreyasc/v9/5PCoU7IUfCicpKBJtBmP6WnWRcJAYo5PSCx8UfGMHCI.ttf",
            "700": "http://fonts.gstatic.com/s/alegreyasc/v9/M9OIREoxDkvynwTpBAYUq3e1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "700italic": "http://fonts.gstatic.com/s/alegreyasc/v9/5PCoU7IUfCicpKBJtBmP6c_zJjSACmk0BRPxQqhnNLU.ttf",
            "800": "http://fonts.gstatic.com/s/alegreyasc/v9/M9OIREoxDkvynwTpBAYUqw89PwPrYLaRFJ-HNCU9NbA.ttf",
            "800italic": "http://fonts.gstatic.com/s/alegreyasc/v9/5PCoU7IUfCicpKBJtBmP6Sad_7rtf4IdDfsLVg-2OV4.ttf",
            "900": "http://fonts.gstatic.com/s/alegreyasc/v9/M9OIREoxDkvynwTpBAYUqyenaqEuufTBk9XMKnKmgDA.ttf",
            "900italic": "http://fonts.gstatic.com/s/alegreyasc/v9/5PCoU7IUfCicpKBJtBmP6U_yTOUGsoC54csJe1b-IRw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Alegreya Sans",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v8",
           "lastModified": "2017-11-09",
           "files": {
            "100": "http://fonts.gstatic.com/s/alegreyasans/v8/TKyx_-JJ6MdpQruNk-t-PJFGFO4uyVFMfB6LZsii7kI.ttf",
            "100italic": "http://fonts.gstatic.com/s/alegreyasans/v8/gRkSP2lBpqoMTVxg7DmVn2cDnjsrnI9_xJ-5gnBaHsE.ttf",
            "300": "http://fonts.gstatic.com/s/alegreyasans/v8/11EDm-lum6tskJMBbdy9acB1LjARzAvdqa1uQC32v70.ttf",
            "300italic": "http://fonts.gstatic.com/s/alegreyasans/v8/WfiXipsmjqRqsDBQ1bA9CnfqlVoxTUFFx1C8tBqmbcg.ttf",
            "regular": "http://fonts.gstatic.com/s/alegreyasans/v8/KYNzioYhDai7mTMnx_gDgn8f0n03UdmQgF_CLvNR2vg.ttf",
            "italic": "http://fonts.gstatic.com/s/alegreyasans/v8/TKyx_-JJ6MdpQruNk-t-PD4G9C9ttb0Oz5Cvf0qOitE.ttf",
            "500": "http://fonts.gstatic.com/s/alegreyasans/v8/11EDm-lum6tskJMBbdy9aQqQmZ7VjhwksfpNVG0pqGc.ttf",
            "500italic": "http://fonts.gstatic.com/s/alegreyasans/v8/WfiXipsmjqRqsDBQ1bA9Cs7DCVO6wo6i5LKIyZDzK40.ttf",
            "700": "http://fonts.gstatic.com/s/alegreyasans/v8/11EDm-lum6tskJMBbdy9aVCbmAUID8LN-q3pJpOk3Ys.ttf",
            "700italic": "http://fonts.gstatic.com/s/alegreyasans/v8/WfiXipsmjqRqsDBQ1bA9CpF66r9C4AnxxlBlGd7xY4g.ttf",
            "800": "http://fonts.gstatic.com/s/alegreyasans/v8/11EDm-lum6tskJMBbdy9acxnD5BewVtRRHHljCwR2bM.ttf",
            "800italic": "http://fonts.gstatic.com/s/alegreyasans/v8/WfiXipsmjqRqsDBQ1bA9CicOAJ_9MkLPbDmrtXDPbIU.ttf",
            "900": "http://fonts.gstatic.com/s/alegreyasans/v8/11EDm-lum6tskJMBbdy9aW42xlVP-j5dagE7-AU2zwg.ttf",
            "900italic": "http://fonts.gstatic.com/s/alegreyasans/v8/WfiXipsmjqRqsDBQ1bA9ChRaDUI9aE8-k7PrIG2iiuo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Alegreya Sans SC",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v7",
           "lastModified": "2017-11-07",
           "files": {
            "100": "http://fonts.gstatic.com/s/alegreyasanssc/v7/trwFkDJLOJf6hqM93944kVnzStfdnFU-MXbO84aBs_M.ttf",
            "100italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/qG3gA9iy5RpXMH4crZboqqakMVR0XlJhO7VdJ8yYvA4.ttf",
            "300": "http://fonts.gstatic.com/s/alegreyasanssc/v7/AjAmkoP1y0Vaad0UPPR46-1IqtfxJspFjzJp0SaQRcI.ttf",
            "300italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/0VweK-TO3aQgazdxg8fs0CnTKaH808trtzttbEg4yVA.ttf",
            "regular": "http://fonts.gstatic.com/s/alegreyasanssc/v7/6kgb6ZvOagoVIRZyl8XV-EklWX-XdLVn1WTiuGuvKIU.ttf",
            "italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/trwFkDJLOJf6hqM93944kTfqo69HNOlCNZvbwAmUtiA.ttf",
            "500": "http://fonts.gstatic.com/s/alegreyasanssc/v7/AjAmkoP1y0Vaad0UPPR46_hHTluI57wqxl55RvSYo3s.ttf",
            "500italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/0VweK-TO3aQgazdxg8fs0NqVvxKdFVwqwzilqfVd39U.ttf",
            "700": "http://fonts.gstatic.com/s/alegreyasanssc/v7/AjAmkoP1y0Vaad0UPPR4600aId5t1FC-xZ8nmpa_XLk.ttf",
            "700italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/0VweK-TO3aQgazdxg8fs0IBYn3VD6xMEnodOh8pnFw4.ttf",
            "800": "http://fonts.gstatic.com/s/alegreyasanssc/v7/AjAmkoP1y0Vaad0UPPR46wQgSHD3Lo1Mif2Wkk5swWA.ttf",
            "800italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/0VweK-TO3aQgazdxg8fs0HStmCm6Rs90XeztCALm0H8.ttf",
            "900": "http://fonts.gstatic.com/s/alegreyasanssc/v7/AjAmkoP1y0Vaad0UPPR461Rf9EWUSEX_PR1d_gLKfpM.ttf",
            "900italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/0VweK-TO3aQgazdxg8fs0IvtwEfTCJoOJugANj-jWDI.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Alex Brush",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/alexbrush/v8/ooh3KJFbKJSUoIRWfiu8o_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Alfa Slab One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/alfaslabone/v7/Qx6FPcitRwTC_k88tLPc-Yjjx0o0jr6fNXxPgYh_a8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Alice",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/alice/v9/wZTAfivekBqIg-rk63nFvQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Alike",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/alike/v10/Ho8YpRKNk_202fwDiGNIyw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Alike Angular",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/alikeangular/v8/OpeCu4xxI3qO1C7CZcJtPT3XH2uEnVI__ynTBvNyki8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Allan",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/allan/v9/T3lemhgZmLQkQI2Qc2bQHA.ttf",
            "700": "http://fonts.gstatic.com/s/allan/v9/zSxQiwo7wgnr7KkMXhSiag.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Allerta",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/allerta/v8/s9FOEuiJFTNbMe06ifzV8g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Allerta Stencil",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/allertastencil/v8/CdSZfRtHbQrBohqmzSdDYFf2eT4jUldwg_9fgfY_tHc.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Allura",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/allura/v6/4hcqgZanyuJ2gMYWffIR6A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Almendra",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/almendra/v10/PDpbB-ZF7deXAAEYPkQOeg.ttf",
            "italic": "http://fonts.gstatic.com/s/almendra/v10/CNWLyiDucqVKVgr4EMidi_esZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/almendra/v10/ZpLdQMj7Q2AFio4nNO6A76CWcynf_cDxXwCLxiixG1c.ttf",
            "700italic": "http://fonts.gstatic.com/s/almendra/v10/-tXHKMcnn6FqrhJV3l1e3QJKKGfqHaYFsRG-T3ceEVo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Almendra Display",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/almendradisplay/v8/2Zuu97WJ_ez-87yz5Ai8fF6uyC_qD11hrFQ6EGgTJWI.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Almendra SC",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/almendrasc/v8/IuiLd8Fm9I6raSalxMoWeaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Amarante",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/amarante/v5/2dQHjIBWSpydit5zkJZnOw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Amaranth",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/amaranth/v8/7VcBog22JBHsHXHdnnycTA.ttf",
            "italic": "http://fonts.gstatic.com/s/amaranth/v8/UrJlRY9LcVERJSvggsdBqPesZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/amaranth/v8/j5OFHqadfxyLnQRxFeox6qCWcynf_cDxXwCLxiixG1c.ttf",
            "700italic": "http://fonts.gstatic.com/s/amaranth/v8/BHyuYFj9nqLFNvOvGh0xTwJKKGfqHaYFsRG-T3ceEVo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Amatic SC",
           "category": "handwriting",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "hebrew",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v11",
           "lastModified": "2017-11-07",
           "files": {
            "regular": "http://fonts.gstatic.com/s/amaticsc/v11/MldbRWLFytvqxU1y81xSVg.ttf",
            "700": "http://fonts.gstatic.com/s/amaticsc/v11/IDnkRTPGcrSVo50UyYNK7y3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Amethysta",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/amethysta/v6/1jEo9tOFIJDolAUpBnWbnA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Amiko",
           "category": "sans-serif",
           "variants": [
            "regular",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/amiko/v2/A7bjc3cOLJtGgpPGnxyHsw.ttf",
            "600": "http://fonts.gstatic.com/s/amiko/v2/BaZst4RZ4sDyD3mH-BfVaA.ttf",
            "700": "http://fonts.gstatic.com/s/amiko/v2/6syx43mQ07VvOmpFc0G9Lg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Amiri",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "arabic"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/amiri/v9/ATARrPmSew75SlpOw2YABQ.ttf",
            "italic": "http://fonts.gstatic.com/s/amiri/v9/3t1yTQlLUXBw8htrqlXBrw.ttf",
            "700": "http://fonts.gstatic.com/s/amiri/v9/WQsR_moz-FNqVwGYgptqiA.ttf",
            "700italic": "http://fonts.gstatic.com/s/amiri/v9/uF8aNEyD0bxMeTBg9bFDSPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Amita",
           "category": "handwriting",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/amita/v3/RhdhGBXSJqkHo6g7miTEcQ.ttf",
            "700": "http://fonts.gstatic.com/s/amita/v3/cIYA2Lzp7l2pcGsqpUidBg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Anaheim",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/anaheim/v5/t-z8aXHMpgI2gjN_rIflKA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Andada",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/andada/v9/rSFaDqNNQBRw3y19MB5Y4w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Andika",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/andika/v9/oe-ag1G0lcqZ3IXfeEgaGg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Angkor",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/angkor/v10/DLpLgIS-8F10ecwKqCm95Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Annie Use Your Telescope",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/annieuseyourtelescope/v8/2cuiO5VmaR09C8SLGEQjGqbp7mtG8sPlcZvOaO8HBak.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Anonymous Pro",
           "category": "monospace",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "greek"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/anonymouspro/v11/Zhfjj_gat3waL4JSju74E-V_5zh5b-_HiooIRUBwn1A.ttf",
            "italic": "http://fonts.gstatic.com/s/anonymouspro/v11/q0u6LFHwttnT_69euiDbWKwIsuKDCXG0NQm7BvAgx-c.ttf",
            "700": "http://fonts.gstatic.com/s/anonymouspro/v11/WDf5lZYgdmmKhO8E1AQud--Cz_5MeePnXDAcLNWyBME.ttf",
            "700italic": "http://fonts.gstatic.com/s/anonymouspro/v11/_fVr_XGln-cetWSUc-JpfA1LL9bfs7wyIp6F8OC9RxA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Antic",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/antic/v9/hEa8XCNM7tXGzD0Uk0AipA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Antic Didone",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/anticdidone/v6/r3nJcTDuOluOL6LGDV1vRy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Antic Slab",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/anticslab/v6/PSbJCTKkAS7skPdkd7AKEvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Anton",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/anton/v9/XIbCenm-W0IRHWYIh7CGUQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Arapey",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/arapey/v6/dqu823lrSYn8T2gApTdslA.ttf",
            "italic": "http://fonts.gstatic.com/s/arapey/v6/pY-Xi5JNBpaWxy2tZhEm5A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Arbutus",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/arbutus/v7/Go_hurxoUsn5MnqNVQgodQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Arbutus Slab",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/arbutusslab/v6/6k3Yp6iS9l4jRIpynA8qMy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Architects Daughter",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/architectsdaughter/v8/RXTgOOQ9AAtaVOHxx0IUBMCy0EhZjHzu-y0e6uLf4Fg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Archivo",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/archivo/v3/r-UxY2mA_5pDuZN717veMA.ttf",
            "italic": "http://fonts.gstatic.com/s/archivo/v3/xM6Bws4B8M6CBFj_NjFDmQ.ttf",
            "500": "http://fonts.gstatic.com/s/archivo/v3/kolpDHEnC87zFuFfslSCevesZW2xOQ-xsNqO47m55DA.ttf",
            "500italic": "http://fonts.gstatic.com/s/archivo/v3/MKuleTj-xvH_kzDLSfxAny3USBnSvpkopQaUR-2r7iU.ttf",
            "600": "http://fonts.gstatic.com/s/archivo/v3/ujChrOQvaQhWGqGyAyvouPesZW2xOQ-xsNqO47m55DA.ttf",
            "600italic": "http://fonts.gstatic.com/s/archivo/v3/yabYJWzTLFXwCTAuo02FTC3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/archivo/v3/pOE88CC9eYkEsVEVFu184_esZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/archivo/v3/KPG24G28nybJri09faZ5fy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Archivo Black",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/archivoblack/v7/WoAoVT7K3k7hHfxKbvB6B51XQG8isOYYJhPIYAyrESQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Archivo Narrow",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/archivonarrow/v8/DsLzC9scoPnrGiwYYMQXppTvAuddT2xDMbdz0mdLyZY.ttf",
            "italic": "http://fonts.gstatic.com/s/archivonarrow/v8/vqsrtPCpTU3tJlKfuXP5zUpmlyBQEFfdE6dERLXdQGQ.ttf",
            "500": "http://fonts.gstatic.com/s/archivonarrow/v8/M__Wu4PAmHf4YZvQM8tWsFZXnRfcj2QuLtpR7YorIko.ttf",
            "500italic": "http://fonts.gstatic.com/s/archivonarrow/v8/wG6O733y5zHl4EKCOh8rSQPEI7VifuA7dF_atQng58I.ttf",
            "600": "http://fonts.gstatic.com/s/archivonarrow/v8/M__Wu4PAmHf4YZvQM8tWsAYHMmBTXW-z0TFb_R_tMpQ.ttf",
            "600italic": "http://fonts.gstatic.com/s/archivonarrow/v8/wG6O733y5zHl4EKCOh8rSQFfhWXBmyfiPDGj4ZvwGNU.ttf",
            "700": "http://fonts.gstatic.com/s/archivonarrow/v8/M__Wu4PAmHf4YZvQM8tWsMLtdzs3iyjn_YuT226ZsLU.ttf",
            "700italic": "http://fonts.gstatic.com/s/archivonarrow/v8/wG6O733y5zHl4EKCOh8rSTg5KB8MNJ4uPAETq9naQO8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Aref Ruqaa",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "arabic"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/arefruqaa/v4/kbqI055uLQz2hkccTTrYPfesZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/arefruqaa/v4/RT-Q5DVI9arM6ZKux-UmTAJKKGfqHaYFsRG-T3ceEVo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Arima Madurai",
           "category": "display",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "tamil",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/arimamadurai/v3/Q0tjl46beRRcUe3RlWWNrdyXLlNBCUjoM1yKFfVCFUI.ttf",
            "200": "http://fonts.gstatic.com/s/arimamadurai/v3/EsCGNPwBfkMk17-w_DTJ4rArwWuxcSSKq67BdR6k5Rg.ttf",
            "300": "http://fonts.gstatic.com/s/arimamadurai/v3/EsCGNPwBfkMk17-w_DTJ4joJ52uD-1fmXmi8u0n_zsc.ttf",
            "regular": "http://fonts.gstatic.com/s/arimamadurai/v3/8fNfThKRw_pr7MwgNdcHiW_MnNA9OgK8I1F23mNWOpE.ttf",
            "500": "http://fonts.gstatic.com/s/arimamadurai/v3/EsCGNPwBfkMk17-w_DTJ4v_2zpxNHQ3utWt_82o9dAo.ttf",
            "700": "http://fonts.gstatic.com/s/arimamadurai/v3/EsCGNPwBfkMk17-w_DTJ4qiiXuG_rGcOxkuidirlnJE.ttf",
            "800": "http://fonts.gstatic.com/s/arimamadurai/v3/EsCGNPwBfkMk17-w_DTJ4khKLu0CevfTHM1eXjGnvQo.ttf",
            "900": "http://fonts.gstatic.com/s/arimamadurai/v3/EsCGNPwBfkMk17-w_DTJ4kZ0oshA7r_PlGegwiHddT8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Arimo",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "hebrew",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-11",
           "files": {
            "regular": "http://fonts.gstatic.com/s/arimo/v11/Gpeo80g-5ji2CcyXWnzh7g.ttf",
            "italic": "http://fonts.gstatic.com/s/arimo/v11/_OdGbnX2-qQ96C4OjhyuPw.ttf",
            "700": "http://fonts.gstatic.com/s/arimo/v11/ZItXugREyvV9LnbY_gxAmw.ttf",
            "700italic": "http://fonts.gstatic.com/s/arimo/v11/__nOLWqmeXdhfr0g7GaFePesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Arizonia",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/arizonia/v8/yzJqkHZqryZBTM7RKYV9Wg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Armata",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/armata/v8/1H8FwGgIRrbYtxSfXhOHlQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Arsenal",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/arsenal/v2/PkcjwJ0AdgwImdsRdyzQQQ.ttf",
            "italic": "http://fonts.gstatic.com/s/arsenal/v2/FvYQ_YMyIFZw-8dXMYPhHg.ttf",
            "700": "http://fonts.gstatic.com/s/arsenal/v2/6R-JWA0Y5N2Lvul2TLOH3_esZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/arsenal/v2/AnUIg26c0nuMZMpNWtsDFy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Artifika",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/artifika/v8/Ekfp4H4QG7D-WsABDOyj8g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Arvo",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/arvo/v10/vvWPwz-PlZEwjOOIKqoZzA.ttf",
            "italic": "http://fonts.gstatic.com/s/arvo/v10/id5a4BCjbenl5Gkqonw_Rw.ttf",
            "700": "http://fonts.gstatic.com/s/arvo/v10/OB3FDST7U38u3OjPK_vvRQ.ttf",
            "700italic": "http://fonts.gstatic.com/s/arvo/v10/Hvl2MuWoXLaCy2v6MD4Yvw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Arya",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/arya/v3/xEVqtU3v8QLospHKpDaYEw.ttf",
            "700": "http://fonts.gstatic.com/s/arya/v3/N13tgOvG7VTXawiI-fJiQA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Asap",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/asap/v7/2lf-1MDR8tsTpEtvJmr2hA.ttf",
            "italic": "http://fonts.gstatic.com/s/asap/v7/mwxNHf8QS8gNWCAMwkJNIg.ttf",
            "500": "http://fonts.gstatic.com/s/asap/v7/bSf7UzaPFkjzB9TuOPVhgw.ttf",
            "500italic": "http://fonts.gstatic.com/s/asap/v7/RUbFVj3EkB2Yo9QDVzDKLw.ttf",
            "600": "http://fonts.gstatic.com/s/asap/v7/aj9e6BCAPmcrrkHyAtWfSg.ttf",
            "600italic": "http://fonts.gstatic.com/s/asap/v7/lSgrQWENLu3EVBpHYwzirw.ttf",
            "700": "http://fonts.gstatic.com/s/asap/v7/o5RUA7SsJ80M8oDFBnrDbg.ttf",
            "700italic": "http://fonts.gstatic.com/s/asap/v7/_rZz9y2oXc09jT5T6BexLQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Asap Condensed",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/asapcondensed/v2/WnB1QP0n-KM9-GXLGChcYSavnWbQ852KImK774Atfew.ttf",
            "italic": "http://fonts.gstatic.com/s/asapcondensed/v2/qnSL07X2cz9966iZSWZCBfYZB3dvQ7xQFxvHcvx7fMA.ttf",
            "500": "http://fonts.gstatic.com/s/asapcondensed/v2/TyBiCbCbffkYs45BrMexjI_Y-6sQdpH-OU-ZdWEi-4E.ttf",
            "500italic": "http://fonts.gstatic.com/s/asapcondensed/v2/9jDg2d4w2asxgWRh6ddxUYiIPHHw_LT0InVaNEq3i9o.ttf",
            "600": "http://fonts.gstatic.com/s/asapcondensed/v2/TyBiCbCbffkYs45BrMexjKfWDuPM568rGzS6rTUUBAI.ttf",
            "600italic": "http://fonts.gstatic.com/s/asapcondensed/v2/9jDg2d4w2asxgWRh6ddxUSWF8ZKt6Ad7F4DSH_awyvE.ttf",
            "700": "http://fonts.gstatic.com/s/asapcondensed/v2/TyBiCbCbffkYs45BrMexjDuwRdwRx6RgmD2V-BAnY3I.ttf",
            "700italic": "http://fonts.gstatic.com/s/asapcondensed/v2/9jDg2d4w2asxgWRh6ddxUWd8_gdoFFngi4b8GzqPlPw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Asar",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/asar/v4/mSmn3H5CcMA84CZ586X7WQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Asset",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/asset/v8/hfPmqY-JzuR1lULlQf9iTg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Assistant",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "600",
            "700",
            "800"
           ],
           "subsets": [
            "hebrew",
            "latin"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/assistant/v2/xXstfiHQzjB9j5ZxYTBoZy3USBnSvpkopQaUR-2r7iU.ttf",
            "300": "http://fonts.gstatic.com/s/assistant/v2/vPC3tCw3LOzCSeGCtVp5Wi3USBnSvpkopQaUR-2r7iU.ttf",
            "regular": "http://fonts.gstatic.com/s/assistant/v2/2iDwv6DBtyixlK5YHngp1w.ttf",
            "600": "http://fonts.gstatic.com/s/assistant/v2/Y4UC5nQA69lWpfV0itoWLi3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/assistant/v2/dZywGH4pMxP6OVyrppOJxy3USBnSvpkopQaUR-2r7iU.ttf",
            "800": "http://fonts.gstatic.com/s/assistant/v2/-mTR0sX8a0RsadH4AMDT8C3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Astloch",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/astloch/v8/fmbitVmHYLQP7MGPuFgpag.ttf",
            "700": "http://fonts.gstatic.com/s/astloch/v8/aPkhM2tL-tz1jX6aX2rvo_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Asul",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/asul/v7/9qpsNR_OOwyOYyo2N0IbBw.ttf",
            "700": "http://fonts.gstatic.com/s/asul/v7/uO8uNmxaq87-DdPmkEg5Gg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Athiti",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "thai"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/athiti/v2/Ge5skdKwzxRPajVLdOJuIg.ttf",
            "300": "http://fonts.gstatic.com/s/athiti/v2/OoT7lj4AaSp1JpGJLKn3CA.ttf",
            "regular": "http://fonts.gstatic.com/s/athiti/v2/e7eiIKP18Iz9Kg1xat6AYw.ttf",
            "500": "http://fonts.gstatic.com/s/athiti/v2/W3pP-ANXfsMOVOG-cqqMFw.ttf",
            "600": "http://fonts.gstatic.com/s/athiti/v2/kYx3dtUYNEuUlzWczYzsmQ.ttf",
            "700": "http://fonts.gstatic.com/s/athiti/v2/tyXFOxQyZGXfqHhtqSikdw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Atma",
           "category": "display",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "bengali",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-09",
           "files": {
            "300": "http://fonts.gstatic.com/s/atma/v3/noxn2r6cT3JgmEDt6Ip5pQ.ttf",
            "regular": "http://fonts.gstatic.com/s/atma/v3/dkXPrLoE_uqcgUFj4JdfRQ.ttf",
            "500": "http://fonts.gstatic.com/s/atma/v3/Htksg3ZXeAEbSvUdTQX-uw.ttf",
            "600": "http://fonts.gstatic.com/s/atma/v3/EGUwD65ZZn9IIHp5Y36b4A.ttf",
            "700": "http://fonts.gstatic.com/s/atma/v3/-fkXl3wADUHjobbwO9d-Wg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Atomic Age",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/atomicage/v9/WvBMe4FxANIKpo6Oi0mVJ_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Aubrey",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/aubrey/v10/zo9w8klO8bmOQIMajQ2aTA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Audiowide",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/audiowide/v6/yGcwRZB6VmoYhPUYT-mEow.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Autour One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/autourone/v7/2xmQBcg7FN72jaQRFZPIDvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Average",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/average/v6/aHUibBqdDbVYl5FM48pxyQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Average Sans",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/averagesans/v6/dnU3R-5A_43y5bIyLztPsS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Averia Gruesa Libre",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/averiagruesalibre/v6/10vbZTOoN6T8D-nvDzwRFyXcKHuZXlCN8VkWHpkUzKM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Averia Libre",
           "category": "display",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/averialibre/v6/r6hGL8sSLm4dTzOPXgx5XacQoVhARpoaILP7amxE_8g.ttf",
            "300italic": "http://fonts.gstatic.com/s/averialibre/v6/I6wAYuAvOgT7el2ePj2nkina0FLWfcB-J_SAYmcAXaI.ttf",
            "regular": "http://fonts.gstatic.com/s/averialibre/v6/rYVgHZZQICWnhjguGsBspC3USBnSvpkopQaUR-2r7iU.ttf",
            "italic": "http://fonts.gstatic.com/s/averialibre/v6/1etzuoNxVHR8F533EkD1WfMZXuCXbOrAvx5R0IT5Oyo.ttf",
            "700": "http://fonts.gstatic.com/s/averialibre/v6/r6hGL8sSLm4dTzOPXgx5XUD2ttfZwueP-QU272T9-k4.ttf",
            "700italic": "http://fonts.gstatic.com/s/averialibre/v6/I6wAYuAvOgT7el2ePj2nkvAs9-1nE9qOqhChW0m4nDE.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Averia Sans Libre",
           "category": "display",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/averiasanslibre/v6/_9-jTfQjaBsWAF_yp5z-V4CP_KG_g80s1KXiBtJHoNc.ttf",
            "300italic": "http://fonts.gstatic.com/s/averiasanslibre/v6/o7BEIK-fG3Ykc5Rzteh88YuyGu4JqttndUh4gRKxic0.ttf",
            "regular": "http://fonts.gstatic.com/s/averiasanslibre/v6/yRJpjT39KxACO9F31mj_LqV8_KRn4epKAjTFK1s1fsg.ttf",
            "italic": "http://fonts.gstatic.com/s/averiasanslibre/v6/COEzR_NPBSUOl3pFwPbPoCZU2HnUZT1xVKaIrHDioao.ttf",
            "700": "http://fonts.gstatic.com/s/averiasanslibre/v6/_9-jTfQjaBsWAF_yp5z-V8QwVOrz1y5GihpZmtKLhlI.ttf",
            "700italic": "http://fonts.gstatic.com/s/averiasanslibre/v6/o7BEIK-fG3Ykc5Rzteh88bXy1DXgmJcVtKjM5UWamMs.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Averia Serif Libre",
           "category": "display",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/averiaseriflibre/v7/yvITAdr5D1nlsdFswJAb8SmC4gFJ2PHmfdVKEd_5S9M.ttf",
            "300italic": "http://fonts.gstatic.com/s/averiaseriflibre/v7/YOLFXyye4sZt6AZk1QybCG2okl0bU63CauowU4iApig.ttf",
            "regular": "http://fonts.gstatic.com/s/averiaseriflibre/v7/fdtF30xa_Erw0zAzOoG4BZqY66i8AUyI16fGqw0iAew.ttf",
            "italic": "http://fonts.gstatic.com/s/averiaseriflibre/v7/o9qhvK9iT5iDWfyhQUe-6Ru_b0bTq5iipbJ9hhgHJ6U.ttf",
            "700": "http://fonts.gstatic.com/s/averiaseriflibre/v7/yvITAdr5D1nlsdFswJAb8Q50KV5TaOVolur4zV2iZsg.ttf",
            "700italic": "http://fonts.gstatic.com/s/averiaseriflibre/v7/YOLFXyye4sZt6AZk1QybCNxohRXP4tNDqG3X4Hqn21k.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bad Script",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/badscript/v6/cRyUs0nJ2eMQFHwBsZNRXfesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bahiana",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bahiana/v2/uUnBWf2QkuMyfXPof7lcwQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Baloo",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/baloo/v3/uFkbq9GEAWUcT0XNeptJ1Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Baloo Bhai",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "gujarati",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/baloobhai/v3/FQvpC-04bh2QINuWAdnNW_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Baloo Bhaijaan",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "arabic"
           ],
           "version": "v2",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/baloobhaijaan/v2/WADJjVg5Kkv7JQ_7Ty9eDj083UVTX9pxrhfn5xHQ3fY.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Baloo Bhaina",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "oriya",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/baloobhaina/v3/HxxbxOVf9WQem_hKo1MXSi3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Baloo Chettan",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "malayalam",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/baloochettan/v3/ODsFofLybGVOJ90e_EwdFbyYXtM25qb63HASTPtoTFA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Baloo Da",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "bengali",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/balooda/v3/RAJ0l2eJl_HDURCVxRE1iQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Baloo Paaji",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "gurmukhi",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/baloopaaji/v3/KeqAjVRzso6QUEfpMLQ-7KCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Baloo Tamma",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "kannada"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/balootamma/v3/-FKAYy14SAfG8Gc6YAAaMaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Baloo Tammudu",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "telugu"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/balootammudu/v3/_VlYJH4sGzgC_fTDQEKfT6ESp5dI1YWe8pDCvQ6RhbI.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Baloo Thambi",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "tamil",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/baloothambi/v3/qXK3dZIeU-O-HruaN5cK0y3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Balthazar",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/balthazar/v6/WgbaSIs6dJAGXJ0qbz2xlw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bangers",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bangers/v10/WAffdge5w99Xif-DLeqmcA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Barlow",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v1",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/barlow/v1/9O0WhafcanqiKfBdztitxA.ttf",
            "100italic": "http://fonts.gstatic.com/s/barlow/v1/tXYBxxWUjBbMU8bIWAkGcfesZW2xOQ-xsNqO47m55DA.ttf",
            "200": "http://fonts.gstatic.com/s/barlow/v1/l1EMxRbbut4FmA64_fASVw.ttf",
            "200italic": "http://fonts.gstatic.com/s/barlow/v1/15_0_LtzeeDuv9LDcMf2OaCWcynf_cDxXwCLxiixG1c.ttf",
            "300": "http://fonts.gstatic.com/s/barlow/v1/YFlmjT41oVykTmuBmMQz3Q.ttf",
            "300italic": "http://fonts.gstatic.com/s/barlow/v1/8n2LTA3MxyD2QLRiRxwiwKCWcynf_cDxXwCLxiixG1c.ttf",
            "regular": "http://fonts.gstatic.com/s/barlow/v1/dPu9raNxg3UgZRNKkE5pjg.ttf",
            "italic": "http://fonts.gstatic.com/s/barlow/v1/Z000UW3dDDpGHIVpwAC5hQ.ttf",
            "500": "http://fonts.gstatic.com/s/barlow/v1/3eZdOWsyL0ZbKOoPVGSyCA.ttf",
            "500italic": "http://fonts.gstatic.com/s/barlow/v1/2XP72T5xWjiARLFpwJomQ6CWcynf_cDxXwCLxiixG1c.ttf",
            "600": "http://fonts.gstatic.com/s/barlow/v1/2ULufj694XWdsmrS7v37Rg.ttf",
            "600italic": "http://fonts.gstatic.com/s/barlow/v1/XDHKE60VlRHH_nj6stvzz6CWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/barlow/v1/mkL56a4l3q6ewq7uDjDmOw.ttf",
            "700italic": "http://fonts.gstatic.com/s/barlow/v1/eE-VTZP95TH6Aaj_rX03_aCWcynf_cDxXwCLxiixG1c.ttf",
            "800": "http://fonts.gstatic.com/s/barlow/v1/uQa6Tv_gttLR9CL67rarUA.ttf",
            "800italic": "http://fonts.gstatic.com/s/barlow/v1/YJSc9JubqU-mmzmYZ6LXxaCWcynf_cDxXwCLxiixG1c.ttf",
            "900": "http://fonts.gstatic.com/s/barlow/v1/Oovk9BImy0cilVTwVOV1Kw.ttf",
            "900italic": "http://fonts.gstatic.com/s/barlow/v1/FMpklDgQ58YgAbK_vZH4F6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Barlow Condensed",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v1",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/barlowcondensed/v1/AFyvjQed-FUXvXfnhoosEwDK0pjiyki0ZtIMDlyFhAE.ttf",
            "100italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/ZKexgmMD5LIQJOU_ocZR1FiQWBt2n3LSp2gALtWANl4.ttf",
            "200": "http://fonts.gstatic.com/s/barlowcondensed/v1/OrFbL_C7uluSl6tRywbI8M80WYZVClixFP0tRprz_cU.ttf",
            "200italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/52CJF6vdk9OPHVYGv6-2MiMOdH8AXXwoQa43xlTAEo0.ttf",
            "300": "http://fonts.gstatic.com/s/barlowcondensed/v1/OrFbL_C7uluSl6tRywbI8JRhFVcex_hajThhFkHyhYk.ttf",
            "300italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/52CJF6vdk9OPHVYGv6-2MvYa9bgCHecWXGgisnodcS0.ttf",
            "regular": "http://fonts.gstatic.com/s/barlowcondensed/v1/cKj4a3uS3MxclVhpADml2aDbm6fPDOZJsR8PmdG62gY.ttf",
            "italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/AFyvjQed-FUXvXfnhoosE4_eiqgTfYGaH0bJiUDZ5GA.ttf",
            "500": "http://fonts.gstatic.com/s/barlowcondensed/v1/OrFbL_C7uluSl6tRywbI8DWZMn-LogRcGVRw8BqdnEM.ttf",
            "500italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/52CJF6vdk9OPHVYGv6-2MudtKTGC_VJqVv-WghpQ580.ttf",
            "600": "http://fonts.gstatic.com/s/barlowcondensed/v1/OrFbL_C7uluSl6tRywbI8Fv5RyFROg7CMzQvEvCxyfU.ttf",
            "600italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/52CJF6vdk9OPHVYGv6-2MksaNbX0lr1uX8RTYUQhE44.ttf",
            "700": "http://fonts.gstatic.com/s/barlowcondensed/v1/OrFbL_C7uluSl6tRywbI8POYkGiSOYDq_T7HbIOV1hA.ttf",
            "700italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/52CJF6vdk9OPHVYGv6-2Mk2zk2RGRC3SlyyLLQfjS_8.ttf",
            "800": "http://fonts.gstatic.com/s/barlowcondensed/v1/OrFbL_C7uluSl6tRywbI8HDoA4zfGsyk3UWso-nouYs.ttf",
            "800italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/52CJF6vdk9OPHVYGv6-2Mv2q6Jty9H2CMBXBNhwD1Uo.ttf",
            "900": "http://fonts.gstatic.com/s/barlowcondensed/v1/OrFbL_C7uluSl6tRywbI8NdhSi1HG6fjGakmSnjUCro.ttf",
            "900italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/52CJF6vdk9OPHVYGv6-2Mrr788H6pTIKOrjeo7zBYN0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Barlow Semi Condensed",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v1",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/rObwC0zkSDuhDJaXoDJAlSi7tdGxScTr3oVgcrTUqWw.ttf",
            "100italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/pyyssUoTx0daao5w56i4a-E335Vk6sjWzkNuUz0lAbo.ttf",
            "200": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/ZyxfuHr9OuBXRZHPDKRFf61IHoFZjDq9yl49NJ3Y0wY.ttf",
            "200italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/6QUBKs5dwYC2YezSXw47vwr2LTAl1O9_KiBEl2DS81X3rGVtsTkPsbDajuO5ueQw.ttf",
            "300": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/ZyxfuHr9OuBXRZHPDKRFf-ZroXgFx_lT3TTeDaAqrWE.ttf",
            "300italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/6QUBKs5dwYC2YezSXw47v9KMN5zR3ng78udgOMwfvpv3rGVtsTkPsbDajuO5ueQw.ttf",
            "regular": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/Ok4yyskPwFvZPrXlQ7v904elbRYnLTTQA1Z5cVLnsI4.ttf",
            "italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/rObwC0zkSDuhDJaXoDJAlcTWmv1-FP1M08DaFQEguYo.ttf",
            "500": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/ZyxfuHr9OuBXRZHPDKRFf64Ixr3FMLIaz6yY1ILODIU.ttf",
            "500italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/6QUBKs5dwYC2YezSXw47vyvpbTtv0ILUeJ-woPAd8cz3rGVtsTkPsbDajuO5ueQw.ttf",
            "600": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/ZyxfuHr9OuBXRZHPDKRFf8MHImBNo4aGUuMCjGiDijI.ttf",
            "600italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/6QUBKs5dwYC2YezSXw47v_YJe2rVoePIdB0uBCD9kLn3rGVtsTkPsbDajuO5ueQw.ttf",
            "700": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/ZyxfuHr9OuBXRZHPDKRFf7GMx7y0UuyPIsLqSMg46Ks.ttf",
            "700italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/6QUBKs5dwYC2YezSXw47v162eJZA4hMkRIrbC5WxTlT3rGVtsTkPsbDajuO5ueQw.ttf",
            "800": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/ZyxfuHr9OuBXRZHPDKRFf_3VPWKD9LjLpSGgTAgUUIc.ttf",
            "800italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/6QUBKs5dwYC2YezSXw47v5kqvImmTqPjGZzPB2zEZMT3rGVtsTkPsbDajuO5ueQw.ttf",
            "900": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/ZyxfuHr9OuBXRZHPDKRFf73y6LE9HhLx9tlnlwi3OAw.ttf",
            "900italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v1/6QUBKs5dwYC2YezSXw47v8lxq5ZLEX8n7hBiU2onrKP3rGVtsTkPsbDajuO5ueQw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Barrio",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/barrio/v2/kzvMfZB0agZKzXC5yyRwWA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Basic",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/basic/v7/hNII2mS5Dxw5C0u_m3mXgA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Battambang",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/battambang/v11/MzrUfQLefYum5vVGM3EZVPesZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/battambang/v11/dezbRtMzfzAA99DmrCYRMgJKKGfqHaYFsRG-T3ceEVo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Baumans",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/baumans/v7/o0bFdPW1H5kd5saqqOcoVg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bayon",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v10",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bayon/v10/yTubusjTnpNRZwA4_50iVw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Belgrano",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/belgrano/v8/iq8DUa2s7g6WRCeMiFrmtQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bellefair",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "hebrew",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bellefair/v3/V_AInB3Ikm6UgW6_YKlk2g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Belleza",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/belleza/v6/wchA3BWJlVqvIcSeNZyXew.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "BenchNine",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/benchnine/v6/ah9xtUy9wLQ3qnWa2p-piS3USBnSvpkopQaUR-2r7iU.ttf",
            "regular": "http://fonts.gstatic.com/s/benchnine/v6/h3OAlYqU3aOeNkuXgH2Q2w.ttf",
            "700": "http://fonts.gstatic.com/s/benchnine/v6/qZpi6ZVZg3L2RL_xoBLxWS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bentham",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bentham/v8/5-Mo8Fe7yg5tzV0GlQIuzQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Berkshire Swash",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/berkshireswash/v6/4RZJjVRPjYnC2939hKCAimKfbtsIjCZP_edQljX9gR0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bevan",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bevan/v9/Rtg3zDsCeQiaJ_Qno22OJA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bigelow Rules",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bigelowrules/v6/FEJCPLwo07FS-6SK6Al50X8f0n03UdmQgF_CLvNR2vg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bigshot One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bigshotone/v8/wSyZjBNTWDQHnvWE2jt6j6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bilbo",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bilbo/v7/-ty-lPs5H7OIucWbnpFrkA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bilbo Swash Caps",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bilboswashcaps/v9/UB_-crLvhx-PwGKW1oosDmYeFSdnSpRYv5h9gpdlD1g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "BioRhyme",
           "category": "serif",
           "variants": [
            "200",
            "300",
            "regular",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/biorhyme/v2/bj-6g_1gJHCc9xQZtLWL36CWcynf_cDxXwCLxiixG1c.ttf",
            "300": "http://fonts.gstatic.com/s/biorhyme/v2/jWqHmLFlu30n7xp12uZd8qCWcynf_cDxXwCLxiixG1c.ttf",
            "regular": "http://fonts.gstatic.com/s/biorhyme/v2/n6v5UkVPy_CjbP3fvsu1CA.ttf",
            "700": "http://fonts.gstatic.com/s/biorhyme/v2/36KN76U1iKt5TFDm2lBz0KCWcynf_cDxXwCLxiixG1c.ttf",
            "800": "http://fonts.gstatic.com/s/biorhyme/v2/k6bYbUnESjLYnworWvSTL6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "BioRhyme Expanded",
           "category": "serif",
           "variants": [
            "200",
            "300",
            "regular",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-09",
           "files": {
            "200": "http://fonts.gstatic.com/s/biorhymeexpanded/v3/FKL4Vyxmq2vsiDrSOzz2sC7oxZzNh3ej55UHm-HviBI.ttf",
            "300": "http://fonts.gstatic.com/s/biorhymeexpanded/v3/FKL4Vyxmq2vsiDrSOzz2sFu4cYPPksG4MRjB5UiYPPw.ttf",
            "regular": "http://fonts.gstatic.com/s/biorhymeexpanded/v3/hgBNpgjTRZzGmZxqN5OuVjndr_hij4ilAk2n1d1AhsE.ttf",
            "700": "http://fonts.gstatic.com/s/biorhymeexpanded/v3/FKL4Vyxmq2vsiDrSOzz2sMVisRVfPEfQ0jijOMQbr0Q.ttf",
            "800": "http://fonts.gstatic.com/s/biorhymeexpanded/v3/FKL4Vyxmq2vsiDrSOzz2sIv1v1eCT6RPbcYZYQ1T1CE.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Biryani",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/biryani/v3/Xx38YzyTFF8n6mRS1Yd88vesZW2xOQ-xsNqO47m55DA.ttf",
            "300": "http://fonts.gstatic.com/s/biryani/v3/u-bneRbizmFMd0VQp5Ze6vesZW2xOQ-xsNqO47m55DA.ttf",
            "regular": "http://fonts.gstatic.com/s/biryani/v3/W7bfR8-IY76Xz0QoB8L2xw.ttf",
            "600": "http://fonts.gstatic.com/s/biryani/v3/1EdcPCVxBR2txgjrza6_YPesZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/biryani/v3/qN2MTZ0j1sKSCtfXLB2dR_esZW2xOQ-xsNqO47m55DA.ttf",
            "800": "http://fonts.gstatic.com/s/biryani/v3/DJyziS7FEy441v22InYdevesZW2xOQ-xsNqO47m55DA.ttf",
            "900": "http://fonts.gstatic.com/s/biryani/v3/trcLkrIut0lM_PPSyQfAMPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bitter",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v12",
           "lastModified": "2017-10-11",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bitter/v12/w_BNdJvVZDRmqy5aSfB2kQ.ttf",
            "italic": "http://fonts.gstatic.com/s/bitter/v12/TC0FZEVzXQIGgzmRfKPZbA.ttf",
            "700": "http://fonts.gstatic.com/s/bitter/v12/4dUtr_4BvHuoRU35suyOAg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Black Ops One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/blackopsone/v9/2XW-DmDsGbDLE372KrMW1Yjjx0o0jr6fNXxPgYh_a8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bokor",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v10",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bokor/v10/uAKdo0A85WW23Gs6mcbw7A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bonbon",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bonbon/v9/IW3u1yzG1knyW5oz0s9_6Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Boogaloo",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/boogaloo/v8/4Wu1tvFMoB80fSu8qLgQfQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bowlby One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bowlbyone/v9/eKpHjHfjoxM2bX36YNucefesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bowlby One SC",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bowlbyonesc/v9/8ZkeXftTuzKBtmxOYXoRedDkZCMxWJecxjvKm2f8MJw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Brawler",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/brawler/v8/3gfSw6imxQnQxweVITqUrg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bree Serif",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/breeserif/v7/5h9crBVIrvZqgf34FHcnEfesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bubblegum Sans",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bubblegumsans/v6/Y9iTUUNz6lbl6TrvV4iwsytnKWgpfO2iSkLzTz-AABg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bubbler One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bubblerone/v6/e8S0qevkZAFaBybtt_SU4qCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Buda",
           "category": "display",
           "variants": [
            "300"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/buda/v8/hLtAmNUmEMJH2yx7NGUjnA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Buenard",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/buenard/v9/NSpMPGKAUgrLrlstYVvIXQ.ttf",
            "700": "http://fonts.gstatic.com/s/buenard/v9/yUlGE115dGr7O9w9FlP3UvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bungee",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bungee/v3/0jM4G9s968t1_tpwzM9UDg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bungee Hairline",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bungeehairline/v3/8Li3dr3whdkxuk7pmLaZaSom6rTIagUDR1YFcrrRZjQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bungee Inline",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bungeeinline/v3/Tb-1914q4rFpjT-F66PLCYjjx0o0jr6fNXxPgYh_a8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bungee Outline",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bungeeoutline/v3/PcidvzXIcqS2Qwxm_iG6bLAREgn5xbW23GEXXnhMQ5Y.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Bungee Shade",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/bungeeshade/v3/HSW7pxPYXBWkq7OSnuXoeC3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Butcherman",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/butcherman/v9/bxiJmD567sPBVpJsT0XR0vesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Butterfly Kids",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/butterflykids/v6/J4NTF5M25htqeTffYImtlUZaDk62iwTBnbnvwSjZciA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cabin",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v12",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cabin/v12/XeuAFYo2xAPHxZGBbQtHhA.ttf",
            "italic": "http://fonts.gstatic.com/s/cabin/v12/0tJ9k3DI5xC4GBgs1E_Jxw.ttf",
            "500": "http://fonts.gstatic.com/s/cabin/v12/HgsCQ-k3_Z_uQ86aFolNBg.ttf",
            "500italic": "http://fonts.gstatic.com/s/cabin/v12/50sjhrGE0njyO-7mGDhGP_esZW2xOQ-xsNqO47m55DA.ttf",
            "600": "http://fonts.gstatic.com/s/cabin/v12/eUDAvKhBtmTCkeVBsFk34A.ttf",
            "600italic": "http://fonts.gstatic.com/s/cabin/v12/sFQpQDBd3G2om0Nl5dD2CvesZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/cabin/v12/4EKhProuY1hq_WCAomq9Dg.ttf",
            "700italic": "http://fonts.gstatic.com/s/cabin/v12/K83QKi8MOKLEqj6bgZ7LrfesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cabin Condensed",
           "category": "sans-serif",
           "variants": [
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cabincondensed/v11/B0txb0blf2N29WdYPJjMSiQPsWWoiv__AzYJ9Zzn9II.ttf",
            "500": "http://fonts.gstatic.com/s/cabincondensed/v11/Ez4zJbsGr2BgXcNUWBVgEARL_-ABKXdjsJSPT0lc2Bk.ttf",
            "600": "http://fonts.gstatic.com/s/cabincondensed/v11/Ez4zJbsGr2BgXcNUWBVgELS5sSASxc8z4EQTQj7DCAI.ttf",
            "700": "http://fonts.gstatic.com/s/cabincondensed/v11/Ez4zJbsGr2BgXcNUWBVgEMAWgzcA047xWLixhLCofl8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cabin Sketch",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cabinsketch/v11/d9fijO34zQajqQvl3YHRCS3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/cabinsketch/v11/ki3SSN5HMOO0-IOLOj069ED2ttfZwueP-QU272T9-k4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Caesar Dressing",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/caesardressing/v6/2T_WzBgE2Xz3FsyJMq34T9gR43u4FvCuJwIfF5Zxl6Y.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cagliostro",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cagliostro/v6/i85oXbtdSatNEzss99bpj_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cairo",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "600",
            "700",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "arabic"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/cairo/v2/9BU6Hrio9syG9zwo_CNPXg.ttf",
            "300": "http://fonts.gstatic.com/s/cairo/v2/mpy3SIEJVOIfFnVLujcRDg.ttf",
            "regular": "http://fonts.gstatic.com/s/cairo/v2/-tPnHq7mmAjcjJRSjsuZGA.ttf",
            "600": "http://fonts.gstatic.com/s/cairo/v2/Ct_3a0tcTEyNNSnuZKDd7g.ttf",
            "700": "http://fonts.gstatic.com/s/cairo/v2/ONxTSBYfmg-V5CkIwS_5gQ.ttf",
            "900": "http://fonts.gstatic.com/s/cairo/v2/Fm-hIVCp5OI5mO4Ec71jcw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Calligraffitti",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/calligraffitti/v9/vLVN2Y-z65rVu1R7lWdvyDXz_orj3gX0_NzfmYulrko.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cambay",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cambay/v3/etU9Bab4VuhzS-OKsb1VXg.ttf",
            "italic": "http://fonts.gstatic.com/s/cambay/v3/ZEz9yNqpEOgejaw1rBhugQ.ttf",
            "700": "http://fonts.gstatic.com/s/cambay/v3/jw9niBxa04eEhnSwTWCEgw.ttf",
            "700italic": "http://fonts.gstatic.com/s/cambay/v3/j-5v_uUr0NXTumWN0siOiaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cambo",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cambo/v6/PnwpRuTdkYCf8qk4ajmNRA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Candal",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/candal/v7/x44dDW28zK7GR1gGDBmj9g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cantarell",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cantarell/v7/p5ydP_uWQ5lsFzcP_XVMEw.ttf",
            "italic": "http://fonts.gstatic.com/s/cantarell/v7/DTCLtOSqP-7dgM-V_xKUjqCWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/cantarell/v7/Yir4ZDsCn4g1kWopdg-ehC3USBnSvpkopQaUR-2r7iU.ttf",
            "700italic": "http://fonts.gstatic.com/s/cantarell/v7/weehrwMeZBXb0QyrWnRwFXe1Pd76Vl7zRpE7NLJQ7XU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cantata One",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cantataone/v7/-a5FDvnBqaBMDaGgZYnEfqCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cantora One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cantoraone/v7/oI-DS62RbHI8ZREjp73ehqCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Capriola",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/capriola/v5/JxXPlkdzWwF9Cwelbvi9jA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cardo",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700"
           ],
           "subsets": [
            "greek-ext",
            "latin",
            "latin-ext",
            "greek"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cardo/v9/jbkF2_R0FKUEZTq5dwSknQ.ttf",
            "italic": "http://fonts.gstatic.com/s/cardo/v9/pcv4Np9tUkq0YREYUcEEJQ.ttf",
            "700": "http://fonts.gstatic.com/s/cardo/v9/lQN30weILimrKvp8rZhF1w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Carme",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/carme/v8/08E0NP1eRBEyFRUadmMfgA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Carrois Gothic",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/carroisgothic/v7/GCgb7bssGpwp7V5ynxmWy2x3d0cwUleGuRTmCYfCUaM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Carrois Gothic SC",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/carroisgothicsc/v7/bVp4nhwFIXU-r3LqUR8DSJTdPW1ioadGi2uRiKgJVCY.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Carter One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/carterone/v9/5X_LFvdbcB7OBG7hBgZ7fPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Catamaran",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "tamil",
            "latin",
            "latin-ext"
           ],
           "version": "v4",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/catamaran/v4/ilWHBiy0krUPdlmYxDuqC6CWcynf_cDxXwCLxiixG1c.ttf",
            "200": "http://fonts.gstatic.com/s/catamaran/v4/hFc-HKSsGk6M-psujei1MC3USBnSvpkopQaUR-2r7iU.ttf",
            "300": "http://fonts.gstatic.com/s/catamaran/v4/Aaag4ccR7Oh_4eai-jbrYC3USBnSvpkopQaUR-2r7iU.ttf",
            "regular": "http://fonts.gstatic.com/s/catamaran/v4/MdNkM-DU8f6R-25Nxpr_XA.ttf",
            "500": "http://fonts.gstatic.com/s/catamaran/v4/83WSX3F86qsvj1Z4EI0tQi3USBnSvpkopQaUR-2r7iU.ttf",
            "600": "http://fonts.gstatic.com/s/catamaran/v4/a9PlHHnuBWiGGk0TwuFKTi3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/catamaran/v4/PpgVtUHUdnBZYNpnzGbScy3USBnSvpkopQaUR-2r7iU.ttf",
            "800": "http://fonts.gstatic.com/s/catamaran/v4/6VjB_uSfn3DZ93IQv58CmC3USBnSvpkopQaUR-2r7iU.ttf",
            "900": "http://fonts.gstatic.com/s/catamaran/v4/5ys9TqpQc9Q6gHqbSox6py3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Caudex",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "greek-ext",
            "latin",
            "latin-ext",
            "greek"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/caudex/v7/PWEexiHLDmQbn2b1OPZWfg.ttf",
            "italic": "http://fonts.gstatic.com/s/caudex/v7/XjMZF6XCisvV3qapD4oJdw.ttf",
            "700": "http://fonts.gstatic.com/s/caudex/v7/PetCI4GyQ5Q3LiOzUu_mMg.ttf",
            "700italic": "http://fonts.gstatic.com/s/caudex/v7/yT8YeHLjaJvQXlUEYOA8gqCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Caveat",
           "category": "handwriting",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v4",
           "lastModified": "2017-11-07",
           "files": {
            "regular": "http://fonts.gstatic.com/s/caveat/v4/8I23b6N-6rRVbh-C_Vx3yA.ttf",
            "700": "http://fonts.gstatic.com/s/caveat/v4/LkaFtQENGJry2eUMwGRTeA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Caveat Brush",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/caveatbrush/v3/_d7bgsk3hfC4DXnUEeYKsy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cedarville Cursive",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cedarvillecursive/v8/cuCe6HrkcqrWTWTUE7dw-41zwq9-z_Lf44CzRAA0d0Y.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ceviche One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cevicheone/v8/WOaXIMBD4VYMy39MsobJhKCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Changa",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "arabic"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/changa/v3/QNWVD9FzsnhVmHzE7HryDQ.ttf",
            "300": "http://fonts.gstatic.com/s/changa/v3/OKZ0H1bMg3M9EZMVzgQ9fg.ttf",
            "regular": "http://fonts.gstatic.com/s/changa/v3/7_e8qktkj6uKM0DamZJY9Q.ttf",
            "500": "http://fonts.gstatic.com/s/changa/v3/KrXcHYf9ILB8aFWCj0Vfxg.ttf",
            "600": "http://fonts.gstatic.com/s/changa/v3/6uCpqxwcsYkfV0M8Ls6WPA.ttf",
            "700": "http://fonts.gstatic.com/s/changa/v3/vAXzeaPkdpxlejFN7h0ibw.ttf",
            "800": "http://fonts.gstatic.com/s/changa/v3/H3IsiH2Fx0Pc4_OU4HSpng.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Changa One",
           "category": "display",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/changaone/v10/dr4qjce4W3kxFrZRkVD87fesZW2xOQ-xsNqO47m55DA.ttf",
            "italic": "http://fonts.gstatic.com/s/changaone/v10/wJVQlUs1lAZel-WdTo2U9y3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Chango",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/chango/v6/3W3AeMMtRTH08t5qLOjBmg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Chathura",
           "category": "sans-serif",
           "variants": [
            "100",
            "300",
            "regular",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v3",
           "lastModified": "2017-10-09",
           "files": {
            "100": "http://fonts.gstatic.com/s/chathura/v3/7tUse0wFXIOSPewsdeNXPvesZW2xOQ-xsNqO47m55DA.ttf",
            "300": "http://fonts.gstatic.com/s/chathura/v3/Gmhr6ULHnPDt9spOZrHOfKCWcynf_cDxXwCLxiixG1c.ttf",
            "regular": "http://fonts.gstatic.com/s/chathura/v3/7hRNO-_zjRopkcP2n1rr8g.ttf",
            "700": "http://fonts.gstatic.com/s/chathura/v3/BO9LvNAseMQ3n1tKWH-uTKCWcynf_cDxXwCLxiixG1c.ttf",
            "800": "http://fonts.gstatic.com/s/chathura/v3/prh_X_5NSsBQefIdGi5B6KCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Chau Philomene One",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/chauphilomeneone/v7/KKc5egCL-a2fFVoOA2x6tBFi5dxgSTdxqnMJgWkBJcg.ttf",
            "italic": "http://fonts.gstatic.com/s/chauphilomeneone/v7/eJj1PY_iN4KiIuyOvtMHJP6uyLkxyiC4WcYA74sfquE.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Chela One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/chelaone/v6/h5O0dEnpnIq6jQnWxZybrA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Chelsea Market",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/chelseamarket/v5/qSdzwh2A4BbNemy78sJLfAAI1i8fIftCBXsBF2v9UMI.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Chenla",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v10",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/chenla/v10/aLNpdAUDq2MZbWz2U1a16g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cherry Cream Soda",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cherrycreamsoda/v8/OrD-AUnFcZeeKa6F_c0_WxOiHiuAPYA9ry3O1RG2XIU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cherry Swash",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cherryswash/v5/HqOk7C7J1TZ5i3L-ejF0vi3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/cherryswash/v5/-CfyMyQqfucZPQNB0nvYyED2ttfZwueP-QU272T9-k4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Chewy",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/chewy/v9/hcDN5cvQdIu6Bx4mg_TSyw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Chicle",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/chicle/v6/xg4q57Ut9ZmyFwLp51JLgg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Chivo",
           "category": "sans-serif",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "700",
            "700italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/chivo/v9/NB24D2RW9gYUd3ctGd-AhA.ttf",
            "300italic": "http://fonts.gstatic.com/s/chivo/v9/A0NbKkUXhyt-4OxUzvrNT_esZW2xOQ-xsNqO47m55DA.ttf",
            "regular": "http://fonts.gstatic.com/s/chivo/v9/L88PEuzS9eRfHRZhAPhZyw.ttf",
            "italic": "http://fonts.gstatic.com/s/chivo/v9/Oe3-Q-a2kBzPnhHck_baMg.ttf",
            "700": "http://fonts.gstatic.com/s/chivo/v9/zC8JLnJuu9Lw0_rA3_VYhg.ttf",
            "700italic": "http://fonts.gstatic.com/s/chivo/v9/2M3ifXA84fdnDIxoCi18JvesZW2xOQ-xsNqO47m55DA.ttf",
            "900": "http://fonts.gstatic.com/s/chivo/v9/JAdkiWd46QCW4vOsj3dzTA.ttf",
            "900italic": "http://fonts.gstatic.com/s/chivo/v9/LoszYnE86q2wJEOjCigBQ_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Chonburi",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "thai"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/chonburi/v2/jd9PfbW0x_8Myt_XeUxvSQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cinzel",
           "category": "serif",
           "variants": [
            "regular",
            "700",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cinzel/v7/GF7dy_Nc-a6EaHYSyGd-EA.ttf",
            "700": "http://fonts.gstatic.com/s/cinzel/v7/nYcFQ6_3pf_6YDrOFjBR8Q.ttf",
            "900": "http://fonts.gstatic.com/s/cinzel/v7/FTBj72ozM2cEOSxiVsRb3A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cinzel Decorative",
           "category": "display",
           "variants": [
            "regular",
            "700",
            "900"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cinzeldecorative/v6/fmgK7oaJJIXAkhd9798yQgT5USbJx2F82lQbogPy2bY.ttf",
            "700": "http://fonts.gstatic.com/s/cinzeldecorative/v6/pXhIVnhFtL_B9Vb1wq2F95-YYVDmZkJErg0zgx9XuZI.ttf",
            "900": "http://fonts.gstatic.com/s/cinzeldecorative/v6/pXhIVnhFtL_B9Vb1wq2F97Khqbv0zQZa0g-9HOXAalU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Clicker Script",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/clickerscript/v5/Zupmk8XwADjufGxWB9KThBnpV0hQCek3EmWnCPrvGRM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Coda",
           "category": "display",
           "variants": [
            "regular",
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v13",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/coda/v13/yHDvulhg-P-p2KRgRrnUYw.ttf",
            "800": "http://fonts.gstatic.com/s/coda/v13/6ZIw0sbALY0KTMWllZB3hQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Coda Caption",
           "category": "sans-serif",
           "variants": [
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "800": "http://fonts.gstatic.com/s/codacaption/v11/YDl6urZh-DUFhiMBTgAnz_qsay_1ZmRGmC8pVRdIfAg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Codystar",
           "category": "display",
           "variants": [
            "300",
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/codystar/v5/EVaUzfJkcb8Zqx9kzQLXqqCWcynf_cDxXwCLxiixG1c.ttf",
            "regular": "http://fonts.gstatic.com/s/codystar/v5/EN-CPFKYowSI7SuR7-0cZA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Coiny",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "tamil",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/coiny/v3/B-pC9lRxssd2RDK37Rdekw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Combo",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/combo/v6/Nab98KjR3JZSSPGtzLyXNw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Comfortaa",
           "category": "display",
           "variants": [
            "300",
            "regular",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v12",
           "lastModified": "2017-11-07",
           "files": {
            "300": "http://fonts.gstatic.com/s/comfortaa/v12/r_tUZNl0G8xCoOmp_JkSCi3USBnSvpkopQaUR-2r7iU.ttf",
            "regular": "http://fonts.gstatic.com/s/comfortaa/v12/lZx6C1VViPgSOhCBUP7hXA.ttf",
            "700": "http://fonts.gstatic.com/s/comfortaa/v12/fND5XPYKrF2tQDwwfWZJIy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Coming Soon",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/comingsoon/v8/Yz2z3IAe2HSQAOWsSG8COKCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Concert One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/concertone/v8/N5IWCIGhUNdPZn_efTxKN6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Condiment",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/condiment/v5/CstmdiPpgFSV0FUNL5LrJA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Content",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/content/v9/l8qaLjygvOkDEU2G6-cjfQ.ttf",
            "700": "http://fonts.gstatic.com/s/content/v9/7PivP8Zvs2qn6F6aNbSQe_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Contrail One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/contrailone/v7/b41KxjgiyqX-hkggANDU6C3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Convergence",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/convergence/v6/eykrGz1NN_YpQmkAZjW-qKCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cookie",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cookie/v8/HxeUC62y_YdDbiFlze357A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Copse",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/copse/v7/wikLrtPGjZDvZ5w2i5HLWg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Corben",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/corben/v11/tTysMZkt-j8Y5yhkgsoajQ.ttf",
            "700": "http://fonts.gstatic.com/s/corben/v11/lirJaFSQWdGQuV--fksg5g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cormorant",
           "category": "serif",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v6",
           "lastModified": "2017-11-21",
           "files": {
            "300": "http://fonts.gstatic.com/s/cormorant/v6/diggKPcUerIA8GQWRVxsVS3USBnSvpkopQaUR-2r7iU.ttf",
            "300italic": "http://fonts.gstatic.com/s/cormorant/v6/UydD9tmk-DfLnEFRr_bBZy9-WlPSxbfiI49GsXo3q0g.ttf",
            "regular": "http://fonts.gstatic.com/s/cormorant/v6/9vWr5LgrNEgvhv1P3z9uuQ.ttf",
            "italic": "http://fonts.gstatic.com/s/cormorant/v6/zzcH3j00ejnIc8jicdcz6KCWcynf_cDxXwCLxiixG1c.ttf",
            "500": "http://fonts.gstatic.com/s/cormorant/v6/lwoiMb1lzDf49h802vpRUy3USBnSvpkopQaUR-2r7iU.ttf",
            "500italic": "http://fonts.gstatic.com/s/cormorant/v6/UydD9tmk-DfLnEFRr_bBZ8CNfqCYlB_eIx7H1TVXe60.ttf",
            "600": "http://fonts.gstatic.com/s/cormorant/v6/LKEtp8XimHLN0gSYqnV9qy3USBnSvpkopQaUR-2r7iU.ttf",
            "600italic": "http://fonts.gstatic.com/s/cormorant/v6/UydD9tmk-DfLnEFRr_bBZ5Z7xm-Bj30Bj2KNdXDzSZg.ttf",
            "700": "http://fonts.gstatic.com/s/cormorant/v6/vOi7JV5F3JmPzXDgUqUwgS3USBnSvpkopQaUR-2r7iU.ttf",
            "700italic": "http://fonts.gstatic.com/s/cormorant/v6/UydD9tmk-DfLnEFRr_bBZ3e1Pd76Vl7zRpE7NLJQ7XU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cormorant Garamond",
           "category": "serif",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v5",
           "lastModified": "2017-11-21",
           "files": {
            "300": "http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVXDeRRUpi2fYbqcTC9PsYaU.ttf",
            "300italic": "http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAjZXe39LdglsIzDOvKnCCso.ttf",
            "regular": "http://fonts.gstatic.com/s/cormorantgaramond/v5/EI2hhCO6kSfLAy-Dpd8fd7_BES7rBA-D9Lo3vCx9yHc.ttf",
            "italic": "http://fonts.gstatic.com/s/cormorantgaramond/v5/eGTlzchVxDKKvK6d7drzlkVlEttMzBRhK_wsRQ4MqEE.ttf",
            "500": "http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVSkwnhSVYGQY4MSUB3uw374.ttf",
            "500italic": "http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAq8qrY1CcUgPLrA3ytfr3SY.ttf",
            "600": "http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVVc2xdGA7R8efE0K6NwSoyI.ttf",
            "600italic": "http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAqms9Rm_p2hhD4xhClOGPEw.ttf",
            "700": "http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVdNg01MkafbqNYmDx8wt95c.ttf",
            "700italic": "http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAvEntfLz8TC-DlAIEJQEwCA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cormorant Infant",
           "category": "serif",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v5",
           "lastModified": "2017-11-21",
           "files": {
            "300": "http://fonts.gstatic.com/s/cormorantinfant/v5/MYRpw6pQIf0XStsiZXQWA_alucuYFvoGqpCMGloCN2Y.ttf",
            "300italic": "http://fonts.gstatic.com/s/cormorantinfant/v5/PK34LKusK6SSQFR2m5-LZgNCjGMFnYSoo4kW2wZNowE.ttf",
            "regular": "http://fonts.gstatic.com/s/cormorantinfant/v5/q5F0I_a42y_qtMoOtqdjagGlf-pqPDOheSBqZOVpkRo.ttf",
            "italic": "http://fonts.gstatic.com/s/cormorantinfant/v5/U6OamtMgLoVs0zd53Z1pNpbq6_N3pcDBvA-VsecMIAA.ttf",
            "500": "http://fonts.gstatic.com/s/cormorantinfant/v5/MYRpw6pQIf0XStsiZXQWA4PJQ8Vh-2Qw35Pq7cVYzdo.ttf",
            "500italic": "http://fonts.gstatic.com/s/cormorantinfant/v5/PK34LKusK6SSQFR2m5-LZq9x-au7fLBTFpfuT52_G64.ttf",
            "600": "http://fonts.gstatic.com/s/cormorantinfant/v5/MYRpw6pQIf0XStsiZXQWA9G0tNuOpbNMRdNl4S5e-n0.ttf",
            "600italic": "http://fonts.gstatic.com/s/cormorantinfant/v5/PK34LKusK6SSQFR2m5-LZkZbdnTqrL_1WMEFjxg0OwY.ttf",
            "700": "http://fonts.gstatic.com/s/cormorantinfant/v5/MYRpw6pQIf0XStsiZXQWAx-3ZynwDtU_450Ho62jf_I.ttf",
            "700italic": "http://fonts.gstatic.com/s/cormorantinfant/v5/PK34LKusK6SSQFR2m5-LZmKEEmz9BBHY1o7RrRAiUXQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cormorant SC",
           "category": "serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v5",
           "lastModified": "2017-11-21",
           "files": {
            "300": "http://fonts.gstatic.com/s/cormorantsc/v5/CCo4fI9EYzhUJcvojQ9Em6cQoVhARpoaILP7amxE_8g.ttf",
            "regular": "http://fonts.gstatic.com/s/cormorantsc/v5/o2HxNCgvhmwJdltu-68tzC3USBnSvpkopQaUR-2r7iU.ttf",
            "500": "http://fonts.gstatic.com/s/cormorantsc/v5/CCo4fI9EYzhUJcvojQ9Em5MQuUSAwdHsY8ov_6tk1oA.ttf",
            "600": "http://fonts.gstatic.com/s/cormorantsc/v5/CCo4fI9EYzhUJcvojQ9Em2v8CylhIUtwUiYO7Z2wXbE.ttf",
            "700": "http://fonts.gstatic.com/s/cormorantsc/v5/CCo4fI9EYzhUJcvojQ9Em0D2ttfZwueP-QU272T9-k4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cormorant Unicase",
           "category": "serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v5",
           "lastModified": "2017-11-21",
           "files": {
            "300": "http://fonts.gstatic.com/s/cormorantunicase/v5/-0mwRHhjEGfrz-UDHJ_78TyAYAK5JX1-zBpfFXu9t3Y.ttf",
            "regular": "http://fonts.gstatic.com/s/cormorantunicase/v5/THO7JMNV6qRoZlg7dU5RUz01TLsHlMvD1uPU3gXOh9s.ttf",
            "500": "http://fonts.gstatic.com/s/cormorantunicase/v5/-0mwRHhjEGfrz-UDHJ_78WActzpz5sLElWWJpZBcHK4.ttf",
            "600": "http://fonts.gstatic.com/s/cormorantunicase/v5/-0mwRHhjEGfrz-UDHJ_78U0bQT13XmwBbvkXy6Yb64Y.ttf",
            "700": "http://fonts.gstatic.com/s/cormorantunicase/v5/-0mwRHhjEGfrz-UDHJ_78Z5CFeQBXku3ADXbkP2V7W8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cormorant Upright",
           "category": "serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v4",
           "lastModified": "2017-10-09",
           "files": {
            "300": "http://fonts.gstatic.com/s/cormorantupright/v4/PwJT_lCdbLUyVq-tARIPhjCfCvaSiUMfec2BKBTMAaw.ttf",
            "regular": "http://fonts.gstatic.com/s/cormorantupright/v4/0n68kajKjTOJn9EPQkf1a-ojtTJJf2MtgkoRSid3NcM.ttf",
            "500": "http://fonts.gstatic.com/s/cormorantupright/v4/PwJT_lCdbLUyVq-tARIPhiWhx5Kr-bzfZXhgF-AnSvk.ttf",
            "600": "http://fonts.gstatic.com/s/cormorantupright/v4/PwJT_lCdbLUyVq-tARIPhuDigFx2V_wQ4SOTZdg5a2s.ttf",
            "700": "http://fonts.gstatic.com/s/cormorantupright/v4/PwJT_lCdbLUyVq-tARIPhuO6SP7lRr11seyd3AkK37Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Courgette",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/courgette/v5/2YO0EYtyE9HUPLZprahpZA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cousine",
           "category": "monospace",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "hebrew",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v12",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cousine/v12/GYX4bPXObJNJo63QJEUnLg.ttf",
            "italic": "http://fonts.gstatic.com/s/cousine/v12/1WtIuajLoo8vjVwsrZ3eOg.ttf",
            "700": "http://fonts.gstatic.com/s/cousine/v12/FXEOnNUcCzhdtoBxiq-lovesZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/cousine/v12/y_AZ5Sz-FwL1lux2xLSTZS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Coustard",
           "category": "serif",
           "variants": [
            "regular",
            "900"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/coustard/v8/iO2Rs5PmqAEAXoU3SkMVBg.ttf",
            "900": "http://fonts.gstatic.com/s/coustard/v8/W02OCWO6OfMUHz6aVyegQ6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Covered By Your Grace",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/coveredbyyourgrace/v7/6ozZp4BPlrbDRWPe3EBGA6CVUMdvnk-GcAiZQrX9Gek.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Crafty Girls",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/craftygirls/v7/0Sv8UWFFdhQmesHL32H8oy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Creepster",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/creepster/v6/0vdr5kWJ6aJlOg5JvxnXzQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Crete Round",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/creteround/v6/B8EwN421qqOCCT8vOH4wJ6CWcynf_cDxXwCLxiixG1c.ttf",
            "italic": "http://fonts.gstatic.com/s/creteround/v6/5xAt7XK2vkUdjhGtt98unUeOrDcLawS7-ssYqLr2Xp4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Crimson Text",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/crimsontext/v8/3IFMwfRa07i-auYR-B-zNS3USBnSvpkopQaUR-2r7iU.ttf",
            "italic": "http://fonts.gstatic.com/s/crimsontext/v8/a5QZnvmn5amyNI-t2BMkWPMZXuCXbOrAvx5R0IT5Oyo.ttf",
            "600": "http://fonts.gstatic.com/s/crimsontext/v8/rEy5tGc5HdXy56Xvd4f3I2v8CylhIUtwUiYO7Z2wXbE.ttf",
            "600italic": "http://fonts.gstatic.com/s/crimsontext/v8/4j4TR-EfnvCt43InYpUNDIR-5-urNOGAobhAyctHvW8.ttf",
            "700": "http://fonts.gstatic.com/s/crimsontext/v8/rEy5tGc5HdXy56Xvd4f3I0D2ttfZwueP-QU272T9-k4.ttf",
            "700italic": "http://fonts.gstatic.com/s/crimsontext/v8/4j4TR-EfnvCt43InYpUNDPAs9-1nE9qOqhChW0m4nDE.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Croissant One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/croissantone/v5/mPjsOObnC77fp1cvZlOfIYjjx0o0jr6fNXxPgYh_a8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Crushed",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/crushed/v8/aHwSejs3Kt0Lg95u7j32jA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cuprum",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cuprum/v9/JgXs0F_UiaEdAS74msmFNg.ttf",
            "italic": "http://fonts.gstatic.com/s/cuprum/v9/cLEz0KV6OxInnktSzpk58g.ttf",
            "700": "http://fonts.gstatic.com/s/cuprum/v9/6tl3_FkDeXSD72oEHuJh4w.ttf",
            "700italic": "http://fonts.gstatic.com/s/cuprum/v9/bnkXaBfoYvaJ75axRPSwVKCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cutive",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cutive/v9/G2bW-ImyOCwKxBkLyz39YQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Cutive Mono",
           "category": "monospace",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/cutivemono/v6/ncWQtFVKcSs8OW798v30k6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Damion",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/damion/v7/13XtECwKxhD_VrOqXL4SiA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Dancing Script",
           "category": "handwriting",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/dancingscript/v9/DK0eTGXiZjN6yA8zAEyM2RnpV0hQCek3EmWnCPrvGRM.ttf",
            "700": "http://fonts.gstatic.com/s/dancingscript/v9/KGBfwabt0ZRLA5W1ywjowb_dAmXiKjTPGCuO6G2MbfA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Dangrek",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v9",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/dangrek/v9/LOaFhBT-EHNxZjV8DAW_ew.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "David Libre",
           "category": "serif",
           "variants": [
            "regular",
            "500",
            "700"
           ],
           "subsets": [
            "hebrew",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/davidlibre/v2/Fp_YuX4CP0pzlSUtACdOo6CWcynf_cDxXwCLxiixG1c.ttf",
            "500": "http://fonts.gstatic.com/s/davidlibre/v2/ea-623K8OFNeGhfSzdpmysCNfqCYlB_eIx7H1TVXe60.ttf",
            "700": "http://fonts.gstatic.com/s/davidlibre/v2/ea-623K8OFNeGhfSzdpmyne1Pd76Vl7zRpE7NLJQ7XU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Dawning of a New Day",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/dawningofanewday/v8/JiDsRhiKZt8uz3NJ5xA06gXLnohmOYWQZqo_sW8GLTk.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Days One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/daysone/v7/kzwZjNhc1iabMsrc_hKBIA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Dekko",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/dekko/v4/AKtgABKC1rUxgIgS-bpojw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Delius",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/delius/v7/TQA163qafki2-gV-B6F_ag.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Delius Swash Caps",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/deliusswashcaps/v9/uXyrEUnoWApxIOICunRq7yIrxb5zDVgU2N3VzXm7zq4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Delius Unicase",
           "category": "handwriting",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/deliusunicase/v10/b2sKujV3Q48RV2PQ0k1vqu6rPKfVZo7L2bERcf0BDns.ttf",
            "700": "http://fonts.gstatic.com/s/deliusunicase/v10/7FTMTITcb4dxUp99FAdTqNy5weKXdcrx-wE0cgECMq8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Della Respira",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/dellarespira/v5/F4E6Lo_IZ6L9AJCcbqtDVeDcg5akpSnIcsPhLOFv7l8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Denk One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/denkone/v5/TdXOeA4eA_hEx4W8Sh9wPw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Devonshire",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/devonshire/v6/I3ct_2t12SYizP8ZC-KFi_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Dhurjati",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v5",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/dhurjati/v5/uV6jO5e2iFMbGB0z79Cy5g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Didact Gothic",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/didactgothic/v11/v8_72sD3DYMKyM0dn3LtWotBLojGU5Qdl8-5NL4v70w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Diplomata",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/diplomata/v9/u-ByBiKgN6rTMA36H3kcKg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Diplomata SC",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/diplomatasc/v6/JdVwAwfE1a_pahXjk5qpNi3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Domine",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/domine/v5/wfVIgamVFjMNQAEWurCiHA.ttf",
            "700": "http://fonts.gstatic.com/s/domine/v5/phBcG1ZbQFxUIt18hPVxnw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Donegal One",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/donegalone/v5/6kN4-fDxz7T9s5U61HwfF6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Doppio One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/doppioone/v5/WHZ3HJQotpk_4aSMNBo_t_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Dorsa",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/dorsa/v8/wCc3cUe6XrmG2LQE6GlIrw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Dosis",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/dosis/v7/ztftab0r6hcd7AeurUGrSQ.ttf",
            "300": "http://fonts.gstatic.com/s/dosis/v7/awIB6L0h5mb0plIKorXmuA.ttf",
            "regular": "http://fonts.gstatic.com/s/dosis/v7/rJRlixu-w0JZ1MyhJpao_Q.ttf",
            "500": "http://fonts.gstatic.com/s/dosis/v7/ruEXDOFMxDPGnjCBKRqdAQ.ttf",
            "600": "http://fonts.gstatic.com/s/dosis/v7/KNAswRNwm3tfONddYyidxg.ttf",
            "700": "http://fonts.gstatic.com/s/dosis/v7/AEEAj0ONidK8NQQMBBlSig.ttf",
            "800": "http://fonts.gstatic.com/s/dosis/v7/nlrKd8E69vvUU39XGsvR7Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Dr Sugiyama",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/drsugiyama/v6/S5Yx3MIckgoyHhhS4C9Tv6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Duru Sans",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/durusans/v10/xn7iYH8xwmSyTvEV_HOxTw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Dynalight",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/dynalight/v6/-CWsIe8OUDWTIHjSAh41kA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "EB Garamond",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-11-07",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ebgaramond/v9/CDR0kuiFK7I1OZ2hSdR7G6CWcynf_cDxXwCLxiixG1c.ttf",
            "italic": "http://fonts.gstatic.com/s/ebgaramond/v9/a7ivpTe3zZzednsAv-J8JUeOrDcLawS7-ssYqLr2Xp4.ttf",
            "500": "http://fonts.gstatic.com/s/ebgaramond/v9/op4fHM8PJYvTt3cOgGzs_8CNfqCYlB_eIx7H1TVXe60.ttf",
            "500italic": "http://fonts.gstatic.com/s/ebgaramond/v9/FBuKd0n5KoiDwUwHEzWyyWnWRcJAYo5PSCx8UfGMHCI.ttf",
            "600": "http://fonts.gstatic.com/s/ebgaramond/v9/op4fHM8PJYvTt3cOgGzs_5Z7xm-Bj30Bj2KNdXDzSZg.ttf",
            "600italic": "http://fonts.gstatic.com/s/ebgaramond/v9/FBuKd0n5KoiDwUwHEzWyyZe6We3S5L6hKLscKpOkmlo.ttf",
            "700": "http://fonts.gstatic.com/s/ebgaramond/v9/op4fHM8PJYvTt3cOgGzs_3e1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "700italic": "http://fonts.gstatic.com/s/ebgaramond/v9/FBuKd0n5KoiDwUwHEzWyyc_zJjSACmk0BRPxQqhnNLU.ttf",
            "800": "http://fonts.gstatic.com/s/ebgaramond/v9/op4fHM8PJYvTt3cOgGzs_w89PwPrYLaRFJ-HNCU9NbA.ttf",
            "800italic": "http://fonts.gstatic.com/s/ebgaramond/v9/FBuKd0n5KoiDwUwHEzWyySad_7rtf4IdDfsLVg-2OV4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Eagle Lake",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/eaglelake/v5/ZKlYin7caemhx9eSg6RvPfesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Eater",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/eater/v6/gm6f3OmYEdbs3lPQtUfBkA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Economica",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/economica/v5/G4rJRujzZbq9Nxngu9l3hg.ttf",
            "italic": "http://fonts.gstatic.com/s/economica/v5/p5O9AVeUqx_n35xQRinNYaCWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/economica/v5/UK4l2VEpwjv3gdcwbwXE9C3USBnSvpkopQaUR-2r7iU.ttf",
            "700italic": "http://fonts.gstatic.com/s/economica/v5/ac5dlUsedQ03RqGOeay-3Xe1Pd76Vl7zRpE7NLJQ7XU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Eczar",
           "category": "serif",
           "variants": [
            "regular",
            "500",
            "600",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/eczar/v6/uKZcAQ5JBBs1UbeXFRbBRg.ttf",
            "500": "http://fonts.gstatic.com/s/eczar/v6/Ooe4KaPp2594tF8TbMfdlQ.ttf",
            "600": "http://fonts.gstatic.com/s/eczar/v6/IjQsWW0bmgkZ6lnN72cnTQ.ttf",
            "700": "http://fonts.gstatic.com/s/eczar/v6/ELC8RVXfBMb3VuuHtMwBOA.ttf",
            "800": "http://fonts.gstatic.com/s/eczar/v6/9Uyt6nTZLx_Qj5_WRah-iQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "El Messiri",
           "category": "sans-serif",
           "variants": [
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "arabic"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/elmessiri/v2/dik94vfrFvHFnvdvxaX8N_esZW2xOQ-xsNqO47m55DA.ttf",
            "500": "http://fonts.gstatic.com/s/elmessiri/v2/kQW9PA2krAOzditagrX75pp-63r6doWhTEbsfBIRJ7A.ttf",
            "600": "http://fonts.gstatic.com/s/elmessiri/v2/HYl7TNqFfA1utGLZRWwzLPpTEJqju4Hz1txDWij77d4.ttf",
            "700": "http://fonts.gstatic.com/s/elmessiri/v2/ji73glXFIetaSqMU3cz7rAJKKGfqHaYFsRG-T3ceEVo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Electrolize",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/electrolize/v6/yFVu5iokC-nt4B1Cyfxb9aCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Elsie",
           "category": "display",
           "variants": [
            "regular",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/elsie/v7/gwspePauE45BJu6Ok1QrfQ.ttf",
            "900": "http://fonts.gstatic.com/s/elsie/v7/1t-9f0N2NFYwAgN7oaISqg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Elsie Swash Caps",
           "category": "display",
           "variants": [
            "regular",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/elsieswashcaps/v6/9L3hIJMPCf6sxCltnxd6X2YeFSdnSpRYv5h9gpdlD1g.ttf",
            "900": "http://fonts.gstatic.com/s/elsieswashcaps/v6/iZnus9qif0tR5pGaDv5zdKoKBWBozTtxi30NfZDOXXU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Emblema One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/emblemaone/v6/7IlBUjBWPIiw7cr_O2IfSaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Emilys Candy",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/emilyscandy/v5/PofLVm6v1SwZGOzC8s-I3S3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Encode Sans",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/encodesans/v2/TvUFkOGoNYwmv-XugrRC14AWxXGWZ3yJw6KhWS7MxOk.ttf",
            "200": "http://fonts.gstatic.com/s/encodesans/v2/IaOhmWC4W3-qZLH1UUd4vEnzyIngrzGjGh22wPb6cGM.ttf",
            "300": "http://fonts.gstatic.com/s/encodesans/v2/IaOhmWC4W3-qZLH1UUd4vC9-WlPSxbfiI49GsXo3q0g.ttf",
            "regular": "http://fonts.gstatic.com/s/encodesans/v2/xpYstnmVhPpbvOHKD75EK6CWcynf_cDxXwCLxiixG1c.ttf",
            "500": "http://fonts.gstatic.com/s/encodesans/v2/IaOhmWC4W3-qZLH1UUd4vMCNfqCYlB_eIx7H1TVXe60.ttf",
            "600": "http://fonts.gstatic.com/s/encodesans/v2/IaOhmWC4W3-qZLH1UUd4vJZ7xm-Bj30Bj2KNdXDzSZg.ttf",
            "700": "http://fonts.gstatic.com/s/encodesans/v2/IaOhmWC4W3-qZLH1UUd4vHe1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "800": "http://fonts.gstatic.com/s/encodesans/v2/IaOhmWC4W3-qZLH1UUd4vA89PwPrYLaRFJ-HNCU9NbA.ttf",
            "900": "http://fonts.gstatic.com/s/encodesans/v2/IaOhmWC4W3-qZLH1UUd4vCenaqEuufTBk9XMKnKmgDA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Encode Sans Condensed",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/encodesanscondensed/v2/6LOoEWi9It096ZzMNw6yeii7tdGxScTr3oVgcrTUqWw.ttf",
            "200": "http://fonts.gstatic.com/s/encodesanscondensed/v2/UP_H-DzI6prLPN-PMUyxY61IHoFZjDq9yl49NJ3Y0wY.ttf",
            "300": "http://fonts.gstatic.com/s/encodesanscondensed/v2/UP_H-DzI6prLPN-PMUyxY-ZroXgFx_lT3TTeDaAqrWE.ttf",
            "regular": "http://fonts.gstatic.com/s/encodesanscondensed/v2/CbFzpyBSY4j-AYSd59uzHIelbRYnLTTQA1Z5cVLnsI4.ttf",
            "500": "http://fonts.gstatic.com/s/encodesanscondensed/v2/UP_H-DzI6prLPN-PMUyxY64Ixr3FMLIaz6yY1ILODIU.ttf",
            "600": "http://fonts.gstatic.com/s/encodesanscondensed/v2/UP_H-DzI6prLPN-PMUyxY8MHImBNo4aGUuMCjGiDijI.ttf",
            "700": "http://fonts.gstatic.com/s/encodesanscondensed/v2/UP_H-DzI6prLPN-PMUyxY7GMx7y0UuyPIsLqSMg46Ks.ttf",
            "800": "http://fonts.gstatic.com/s/encodesanscondensed/v2/UP_H-DzI6prLPN-PMUyxY_3VPWKD9LjLpSGgTAgUUIc.ttf",
            "900": "http://fonts.gstatic.com/s/encodesanscondensed/v2/UP_H-DzI6prLPN-PMUyxY73y6LE9HhLx9tlnlwi3OAw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Encode Sans Expanded",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/encodesansexpanded/v2/SxJCe-5XtgTwkLeuB6DsDAzYtaUryPdMybTmqF2t-hk.ttf",
            "200": "http://fonts.gstatic.com/s/encodesansexpanded/v2/NZFW_aAjtWMwFwRPQHyMtImyl4eLRAk2hWaf4usQtfw.ttf",
            "300": "http://fonts.gstatic.com/s/encodesansexpanded/v2/NZFW_aAjtWMwFwRPQHyMtE8dNemX_23MZOKO5OoYF5E.ttf",
            "regular": "http://fonts.gstatic.com/s/encodesansexpanded/v2/OdOWbHhxwo9XAUoeS5o4Dg7dxr0N5HY0cZKknTIL6n4.ttf",
            "500": "http://fonts.gstatic.com/s/encodesansexpanded/v2/NZFW_aAjtWMwFwRPQHyMtPqCJK4Zn8SYLcLgnaiBGrc.ttf",
            "600": "http://fonts.gstatic.com/s/encodesansexpanded/v2/NZFW_aAjtWMwFwRPQHyMtFwX9co0a2-oIpf1o8i-1K0.ttf",
            "700": "http://fonts.gstatic.com/s/encodesansexpanded/v2/NZFW_aAjtWMwFwRPQHyMtD3JW4OQm61sg8k8DfLBAwg.ttf",
            "800": "http://fonts.gstatic.com/s/encodesansexpanded/v2/NZFW_aAjtWMwFwRPQHyMtJvi7umicd6qVgIYLFojqyc.ttf",
            "900": "http://fonts.gstatic.com/s/encodesansexpanded/v2/NZFW_aAjtWMwFwRPQHyMtGZrxQvJ_xEKbxayeNEjyrc.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Encode Sans Semi Condensed",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/E6kA5T3mzxUj69IdQg70PS1QEJchpDhTUwbwiSjEPbgt1EgZ0r6ZKKUGlEftq-4l.ttf",
            "200": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/z-mVMDpNLBzCo6eVg95vHVxi1xYyRqMxS_FPu-moW0lnrnXkzuOM3_obd5Pijc8I.ttf",
            "300": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/z-mVMDpNLBzCo6eVg95vHSLQwj9Lduqb1W3tq4fXf91Hjqw3C2sEu_rLGKi69l6e.ttf",
            "regular": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/70xnFP2R6L67b4lbb0LqFQ760Nu0ZmWpK1JTCHVCKHz3rGVtsTkPsbDajuO5ueQw.ttf",
            "500": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/z-mVMDpNLBzCo6eVg95vHWPzD9HBxt0HXJBsJbnj8Taafut6-naFoUxG7HwSESew.ttf",
            "600": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/z-mVMDpNLBzCo6eVg95vHZTIxrxLvLMtU-yhyAf1TK_6UxCao7uB89bcQ1oo--3e.ttf",
            "700": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/z-mVMDpNLBzCo6eVg95vHanrccv-0xgQwXIoROQBHDkCSihn6h2mBbERvk93HhFa.ttf",
            "800": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/z-mVMDpNLBzCo6eVg95vHaUGwPLApwd9av9Pcjv04cOpN24TwUgSdG0iUOmnC_tI.ttf",
            "900": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/z-mVMDpNLBzCo6eVg95vHf3LPq0EY0JuN61BrMSCA9udBAFcbdBtG4hJ7aeN0Leh.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Encode Sans Semi Expanded",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v2/Dt9vBR-jlFaGi37WwOwD_8qIAxu59oivT8gVJSaPAJmglnMp3_3A8V8Ai8YosRtX.ttf",
            "200": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v2/CzlMbAciMXgtU6UUaNDI4iyuBgySKCdxv6GjzoxXXEct1EgZ0r6ZKKUGlEftq-4l.ttf",
            "300": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v2/CzlMbAciMXgtU6UUaNDI4mA0loIJ_cqzG2SO7pmT2v8t1EgZ0r6ZKKUGlEftq-4l.ttf",
            "regular": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v2/L50h_XWfeGcmQgSaLLv8qDl-hG_EEbQLBeCEvsoBv9c.ttf",
            "500": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v2/CzlMbAciMXgtU6UUaNDI4m9ZGOr7ke8-zfCGnYaqVkwt1EgZ0r6ZKKUGlEftq-4l.ttf",
            "600": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v2/CzlMbAciMXgtU6UUaNDI4jZr6ABenySL2MEoV49ZPIEt1EgZ0r6ZKKUGlEftq-4l.ttf",
            "700": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v2/CzlMbAciMXgtU6UUaNDI4vb58e8syHA9EvUqaFcpH8kt1EgZ0r6ZKKUGlEftq-4l.ttf",
            "800": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v2/CzlMbAciMXgtU6UUaNDI4v1ujhhC8jANxa3d-BaQZ3st1EgZ0r6ZKKUGlEftq-4l.ttf",
            "900": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v2/CzlMbAciMXgtU6UUaNDI4sIOIZ6BsfRi1i9aEyUWch4t1EgZ0r6ZKKUGlEftq-4l.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Engagement",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/engagement/v6/4Uz0Jii7oVPcaFRYmbpU6vesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Englebert",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/englebert/v5/sll38iOvOuarDTYBchlP3Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Enriqueta",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/enriqueta/v6/_p90TrIwR1SC-vDKtmrv6A.ttf",
            "700": "http://fonts.gstatic.com/s/enriqueta/v6/I27Pb-wEGH2ajLYP0QrtSC3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Erica One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ericaone/v8/cIBnH2VAqQMIGYAcE4ufvQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Esteban",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/esteban/v5/ESyhLgqDDyK5JcFPp2svDw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Euphoria Script",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/euphoriascript/v5/c4XB4Iijj_NvSsCF4I0O2MxLhO8OSNnfAp53LK1_iRs.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ewert",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ewert/v5/Em8hrzuzSbfHcTVqMjbAQg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Exo",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/exo/v6/RI7A9uwjRmPbVp0n8e-Jvg.ttf",
            "100italic": "http://fonts.gstatic.com/s/exo/v6/qtGyZZlWb2EEvby3ZPosxw.ttf",
            "200": "http://fonts.gstatic.com/s/exo/v6/F8OfC_swrRRxpFt-tlXZQg.ttf",
            "200italic": "http://fonts.gstatic.com/s/exo/v6/fr4HBfXHYiIngW2_bhlgRw.ttf",
            "300": "http://fonts.gstatic.com/s/exo/v6/SBrN7TKUqgGUvfxqHqsnNw.ttf",
            "300italic": "http://fonts.gstatic.com/s/exo/v6/3gmiLjBegIfcDLISjTGA1g.ttf",
            "regular": "http://fonts.gstatic.com/s/exo/v6/eUEzTFueNXRVhbt4PEB8kQ.ttf",
            "italic": "http://fonts.gstatic.com/s/exo/v6/cfgolWisMSURhpQeVHl_NA.ttf",
            "500": "http://fonts.gstatic.com/s/exo/v6/jCg6DmGGXt_OVyp5ofQHPw.ttf",
            "500italic": "http://fonts.gstatic.com/s/exo/v6/lo5eTdCNJZQVN08p8RnzAQ.ttf",
            "600": "http://fonts.gstatic.com/s/exo/v6/q_SG5kXUmOcIvFpgtdZnlw.ttf",
            "600italic": "http://fonts.gstatic.com/s/exo/v6/0cExa8K_pxS2lTuMr68XUA.ttf",
            "700": "http://fonts.gstatic.com/s/exo/v6/3_jwsL4v9uHjl5Q37G57mw.ttf",
            "700italic": "http://fonts.gstatic.com/s/exo/v6/0me55yJIxd5vyQ9bF7SsiA.ttf",
            "800": "http://fonts.gstatic.com/s/exo/v6/yLPuxBuV0lzqibRJyooOJg.ttf",
            "800italic": "http://fonts.gstatic.com/s/exo/v6/n3LejeKVj_8gtZq5fIgNYw.ttf",
            "900": "http://fonts.gstatic.com/s/exo/v6/97d0nd6Yv4-SA_X92xAuZA.ttf",
            "900italic": "http://fonts.gstatic.com/s/exo/v6/JHTkQVhzyLtkY13Ye95TJQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Exo 2",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/exo2/v4/oVOtQy53isv97g4UhBUDqg.ttf",
            "100italic": "http://fonts.gstatic.com/s/exo2/v4/LNYVgsJcaCxoKFHmd4AZcg.ttf",
            "200": "http://fonts.gstatic.com/s/exo2/v4/qa-Ci2pBwJdCxciE1ErifQ.ttf",
            "200italic": "http://fonts.gstatic.com/s/exo2/v4/DCrVxDVvS69n50O-5erZVvesZW2xOQ-xsNqO47m55DA.ttf",
            "300": "http://fonts.gstatic.com/s/exo2/v4/nLUBdz_lHHoVIPor05Byhw.ttf",
            "300italic": "http://fonts.gstatic.com/s/exo2/v4/iSy9VTeUTiqiurQg2ywtu_esZW2xOQ-xsNqO47m55DA.ttf",
            "regular": "http://fonts.gstatic.com/s/exo2/v4/Pf_kZuIH5c5WKVkQUaeSWQ.ttf",
            "italic": "http://fonts.gstatic.com/s/exo2/v4/xxA5ZscX9sTU6U0lZJUlYA.ttf",
            "500": "http://fonts.gstatic.com/s/exo2/v4/oM0rzUuPqVJpW-VEIpuW5w.ttf",
            "500italic": "http://fonts.gstatic.com/s/exo2/v4/amzRVCB-gipwdihZZ2LtT_esZW2xOQ-xsNqO47m55DA.ttf",
            "600": "http://fonts.gstatic.com/s/exo2/v4/YnSn3HsyvyI1feGSdRMYqA.ttf",
            "600italic": "http://fonts.gstatic.com/s/exo2/v4/Vmo58BiptGwfVFb0teU5gPesZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/exo2/v4/2DiK4XkdTckfTk6we73-bQ.ttf",
            "700italic": "http://fonts.gstatic.com/s/exo2/v4/Sdo-zW-4_--pDkTg6bYrY_esZW2xOQ-xsNqO47m55DA.ttf",
            "800": "http://fonts.gstatic.com/s/exo2/v4/IVYl_7dJruOg8zKRpC8Hrw.ttf",
            "800italic": "http://fonts.gstatic.com/s/exo2/v4/p0TA6KeOz1o4rySEbvUxI_esZW2xOQ-xsNqO47m55DA.ttf",
            "900": "http://fonts.gstatic.com/s/exo2/v4/e8csG8Wnu87AF6uCndkFRQ.ttf",
            "900italic": "http://fonts.gstatic.com/s/exo2/v4/KPhsGCoT2-7Uj6pMlRscH_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Expletus Sans",
           "category": "display",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/expletussans/v10/gegTSDBDs5le3g6uxU1ZsX8f0n03UdmQgF_CLvNR2vg.ttf",
            "italic": "http://fonts.gstatic.com/s/expletussans/v10/Y-erXmY0b6DU_i2Qu0hTJj4G9C9ttb0Oz5Cvf0qOitE.ttf",
            "500": "http://fonts.gstatic.com/s/expletussans/v10/cl6rhMY77Ilk8lB_uYRRwAqQmZ7VjhwksfpNVG0pqGc.ttf",
            "500italic": "http://fonts.gstatic.com/s/expletussans/v10/sRBNtc46w65uJE451UYmW87DCVO6wo6i5LKIyZDzK40.ttf",
            "600": "http://fonts.gstatic.com/s/expletussans/v10/cl6rhMY77Ilk8lB_uYRRwCvj1tU7IJMS3CS9kCx2B3U.ttf",
            "600italic": "http://fonts.gstatic.com/s/expletussans/v10/sRBNtc46w65uJE451UYmW8yKH23ZS6zCKOFHG0e_4JE.ttf",
            "700": "http://fonts.gstatic.com/s/expletussans/v10/cl6rhMY77Ilk8lB_uYRRwFCbmAUID8LN-q3pJpOk3Ys.ttf",
            "700italic": "http://fonts.gstatic.com/s/expletussans/v10/sRBNtc46w65uJE451UYmW5F66r9C4AnxxlBlGd7xY4g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fanwood Text",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fanwoodtext/v7/hDNDHUlsSb8bgnEmDp4T_i3USBnSvpkopQaUR-2r7iU.ttf",
            "italic": "http://fonts.gstatic.com/s/fanwoodtext/v7/0J3SBbkMZqBV-3iGxs5E9_MZXuCXbOrAvx5R0IT5Oyo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Farsan",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "gujarati",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/farsan/v3/Hdf9Y76SQ6e1X0Nqk3rHtw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fascinate",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fascinate/v6/ZE0637WWkBPKt1AmFaqD3Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fascinate Inline",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fascinateinline/v7/lRguYfMfWArflkm5aOQ5QJmp8DTZ6iHear7UV05iykg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Faster One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fasterone/v8/H4ciBXCHmdfClFb-vWhfyLs.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fasthand",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v8",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fasthand/v8/6XAagHH_KmpZL67wTvsETQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fauna One",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/faunaone/v5/8kL-wpAPofcAMELI_5NRnQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Faustina",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/faustina/v2/VG2SxiuKreAgH5lXZ5wbng.ttf",
            "italic": "http://fonts.gstatic.com/s/faustina/v2/JxwP25AedFpQZdkRJXn_5_esZW2xOQ-xsNqO47m55DA.ttf",
            "500": "http://fonts.gstatic.com/s/faustina/v2/DMeEDU8yYDdzN-7RbPNe8KCWcynf_cDxXwCLxiixG1c.ttf",
            "500italic": "http://fonts.gstatic.com/s/faustina/v2/P6ASjT1goNMRHifKhq6WRZp-63r6doWhTEbsfBIRJ7A.ttf",
            "600": "http://fonts.gstatic.com/s/faustina/v2/YOr4BI3KhIzqwTG7vH0SM6CWcynf_cDxXwCLxiixG1c.ttf",
            "600italic": "http://fonts.gstatic.com/s/faustina/v2/OJMzHMQmadDP2rMiZVbZd_pTEJqju4Hz1txDWij77d4.ttf",
            "700": "http://fonts.gstatic.com/s/faustina/v2/fO-A_KFKgRicxL_4JD_smaCWcynf_cDxXwCLxiixG1c.ttf",
            "700italic": "http://fonts.gstatic.com/s/faustina/v2/XGqbj0LfEd8UkIzdKBNuggJKKGfqHaYFsRG-T3ceEVo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Federant",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/federant/v9/tddZFSiGvxICNOGra0i5aA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Federo",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/federo/v9/JPhe1S2tujeyaR79gXBLeQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Felipa",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/felipa/v5/SeyfyFZY7abAQXGrOIYnYg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fenix",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fenix/v5/Ak8wR3VSlAN7VN_eMeJj7Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Finger Paint",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fingerpaint/v7/m_ZRbiY-aPb13R3DWPBGXy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fira Mono",
           "category": "monospace",
           "variants": [
            "regular",
            "500",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/firamono/v6/WQOm1D4RO-yvA9q9trJc8g.ttf",
            "500": "http://fonts.gstatic.com/s/firamono/v6/PJ4zAY1ucu5ib6LzyvHMkS3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/firamono/v6/l24Wph3FsyKAbJ8dfExTZy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fira Sans",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/firasans/v8/8lKWk2lAb6-y9gc_GLDdPKCWcynf_cDxXwCLxiixG1c.ttf",
            "100italic": "http://fonts.gstatic.com/s/firasans/v8/fmobwZujc_UI4huzQvESm4AWxXGWZ3yJw6KhWS7MxOk.ttf",
            "200": "http://fonts.gstatic.com/s/firasans/v8/H2QtVYRshA1CFy63P7ykZy3USBnSvpkopQaUR-2r7iU.ttf",
            "200italic": "http://fonts.gstatic.com/s/firasans/v8/6s0YCA9oCTF6hM60YM-qTUnzyIngrzGjGh22wPb6cGM.ttf",
            "300": "http://fonts.gstatic.com/s/firasans/v8/VTBnrK42EiOBncVyQXZ7jy3USBnSvpkopQaUR-2r7iU.ttf",
            "300italic": "http://fonts.gstatic.com/s/firasans/v8/6s0YCA9oCTF6hM60YM-qTS9-WlPSxbfiI49GsXo3q0g.ttf",
            "regular": "http://fonts.gstatic.com/s/firasans/v8/nsT0isDy56OkSX99sFQbXw.ttf",
            "italic": "http://fonts.gstatic.com/s/firasans/v8/cPT_2ddmoxsUuMtQqa8zGqCWcynf_cDxXwCLxiixG1c.ttf",
            "500": "http://fonts.gstatic.com/s/firasans/v8/zM2u8V3CuPVwAAXFQcDi4C3USBnSvpkopQaUR-2r7iU.ttf",
            "500italic": "http://fonts.gstatic.com/s/firasans/v8/6s0YCA9oCTF6hM60YM-qTcCNfqCYlB_eIx7H1TVXe60.ttf",
            "600": "http://fonts.gstatic.com/s/firasans/v8/TPhEsJuyxIEzWtby22btfi3USBnSvpkopQaUR-2r7iU.ttf",
            "600italic": "http://fonts.gstatic.com/s/firasans/v8/6s0YCA9oCTF6hM60YM-qTZZ7xm-Bj30Bj2KNdXDzSZg.ttf",
            "700": "http://fonts.gstatic.com/s/firasans/v8/DugPdSljmOTocZOR2CItOi3USBnSvpkopQaUR-2r7iU.ttf",
            "700italic": "http://fonts.gstatic.com/s/firasans/v8/6s0YCA9oCTF6hM60YM-qTXe1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "800": "http://fonts.gstatic.com/s/firasans/v8/htOw9f-chtELyJuFCkCrFi3USBnSvpkopQaUR-2r7iU.ttf",
            "800italic": "http://fonts.gstatic.com/s/firasans/v8/6s0YCA9oCTF6hM60YM-qTQ89PwPrYLaRFJ-HNCU9NbA.ttf",
            "900": "http://fonts.gstatic.com/s/firasans/v8/rowJfijyp23uW9P2J-sluC3USBnSvpkopQaUR-2r7iU.ttf",
            "900italic": "http://fonts.gstatic.com/s/firasans/v8/6s0YCA9oCTF6hM60YM-qTSenaqEuufTBk9XMKnKmgDA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fira Sans Condensed",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/firasanscondensed/v2/-hkH0zXsjNm-yd0g99LvtmzsEJYDLiwza6ZHrdqhthQ.ttf",
            "100italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/Nqqv1KfmeTlTML-ky7aaRPKr3wa5Ugsm4QGD8HSjBf8.ttf",
            "200": "http://fonts.gstatic.com/s/firasanscondensed/v2/k1srRZ14gKpu4XGd0R993IBfX0yoOQz7y6Fa57EWAgY.ttf",
            "200italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/Z87ZCYzj43dcQd7C-kCjDzTCSvnRzshTGhbaUNxVLsY.ttf",
            "300": "http://fonts.gstatic.com/s/firasanscondensed/v2/k1srRZ14gKpu4XGd0R993EMwSSh38KQVJx4ABtsZTnA.ttf",
            "300italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/Z87ZCYzj43dcQd7C-kCjD4_LkTZ_uhAwfmGJ084hlvM.ttf",
            "regular": "http://fonts.gstatic.com/s/firasanscondensed/v2/HQGj1o4-qj8agzakWWMQw0b2huS6PSilRpwXI3qYZmg.ttf",
            "italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/-hkH0zXsjNm-yd0g99Lvtv745YdnE8ZqDtluSBzScUA.ttf",
            "500": "http://fonts.gstatic.com/s/firasanscondensed/v2/k1srRZ14gKpu4XGd0R993OsjvTPWUq6WFqixIyn02S8.ttf",
            "500italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/Z87ZCYzj43dcQd7C-kCjD4BZvKPjZWiSZqpadd3c-cI.ttf",
            "600": "http://fonts.gstatic.com/s/firasanscondensed/v2/k1srRZ14gKpu4XGd0R993HI2_Em5SxSZLj3SINQVfR0.ttf",
            "600italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/Z87ZCYzj43dcQd7C-kCjD5AgRolq0CFuJyGMzcpUuqI.ttf",
            "700": "http://fonts.gstatic.com/s/firasanscondensed/v2/k1srRZ14gKpu4XGd0R993BEM87DM3yorPOrvA-vB930.ttf",
            "700italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/Z87ZCYzj43dcQd7C-kCjDzkJmEiMQ4xM-o8FMi_9og4.ttf",
            "800": "http://fonts.gstatic.com/s/firasanscondensed/v2/k1srRZ14gKpu4XGd0R993IakE3OFfI2LZ4c6GPO8Mzs.ttf",
            "800italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/Z87ZCYzj43dcQd7C-kCjD07QUKmu2W_Ow4yNN8hZ1i8.ttf",
            "900": "http://fonts.gstatic.com/s/firasanscondensed/v2/k1srRZ14gKpu4XGd0R993BL2AAruu1GYH8xAyPJJAg8.ttf",
            "900italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/Z87ZCYzj43dcQd7C-kCjD8mJu-lqHNyZBDoYLJNH3Ks.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fira Sans Extra Condensed",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/firasansextracondensed/v2/_dPmaUiuUAWmL0ibePdArgFORyOzJNaQMfz6m4ejZbGglnMp3_3A8V8Ai8YosRtX.ttf",
            "100italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/G8VKhLxlTd0YOlG3i1R8CfHXjqTqiXVW6z8kDssMYPCAFsVxlmd8icOioVkuzMTp.ttf",
            "200": "http://fonts.gstatic.com/s/firasansextracondensed/v2/34whiWDL4CxC1laOcj7OwW_7IC3ILXfeIVwvfWGu4Sgt1EgZ0r6ZKKUGlEftq-4l.ttf",
            "200italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPBJ88iJ4K8xoxodtsD2-nBj.ttf",
            "300": "http://fonts.gstatic.com/s/firasansextracondensed/v2/34whiWDL4CxC1laOcj7OwW7O05EUNkkL_mPtCuekiV0t1EgZ0r6ZKKUGlEftq-4l.ttf",
            "300italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPAvflpT0sW34iOPRrF6N6tI.ttf",
            "regular": "http://fonts.gstatic.com/s/firasansextracondensed/v2/wg_5XrW_o1_ZfuCbAkBfGRreEc6WSk_gssVJg3w2ARQ.ttf",
            "italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/_dPmaUiuUAWmL0ibePdArnKUexidEaHsf8DLYXbriUSglnMp3_3A8V8Ai8YosRtX.ttf",
            "500": "http://fonts.gstatic.com/s/firasansextracondensed/v2/34whiWDL4CxC1laOcj7Owdd0GPYAHEVh0EvoffkRAuMt1EgZ0r6ZKKUGlEftq-4l.ttf",
            "500italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPDAjX6gmJQf3iMex9U1V3ut.ttf",
            "600": "http://fonts.gstatic.com/s/firasansextracondensed/v2/34whiWDL4CxC1laOcj7OwW8v1dGG_WArVpDmblm5TDot1EgZ0r6ZKKUGlEftq-4l.ttf",
            "600italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPCWe8ZvgY99AY9ijXVw80mY.ttf",
            "700": "http://fonts.gstatic.com/s/firasansextracondensed/v2/34whiWDL4CxC1laOcj7OwdEjTMY3GGLBv_AxlS3Ww6ct1EgZ0r6ZKKUGlEftq-4l.ttf",
            "700italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPB3tT3e-lZe80aROzSyUO11.ttf",
            "800": "http://fonts.gstatic.com/s/firasansextracondensed/v2/34whiWDL4CxC1laOcj7OwZZWqFq9WyGGQ2ef9bXDKiQt1EgZ0r6ZKKUGlEftq-4l.ttf",
            "800italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPAPPT8D62C2kRSfhzQlPTWw.ttf",
            "900": "http://fonts.gstatic.com/s/firasansextracondensed/v2/34whiWDL4CxC1laOcj7OwRPaRBEe7-4iQsBL_zD1FQ8t1EgZ0r6ZKKUGlEftq-4l.ttf",
            "900italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/iGnuurQ1EqiOs_hlr82MCvHXjqTqiXVW6z8kDssMYPAnp2qhLrn0wZPVzCpypoAw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fjalla One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fjallaone/v5/3b7vWCfOZsU53vMa8LWsf_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fjord One",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fjordone/v6/R_YHK8au2uFPw5tNu5N7zw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Flamenco",
           "category": "display",
           "variants": [
            "300",
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/flamenco/v8/x9iI5CogvuZVCGoRHwXuo6CWcynf_cDxXwCLxiixG1c.ttf",
            "regular": "http://fonts.gstatic.com/s/flamenco/v8/HC0ugfLLgt26I5_BWD1PZA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Flavors",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/flavors/v6/SPJi5QclATvon8ExcKGRvQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fondamento",
           "category": "handwriting",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fondamento/v7/6LWXcjT1B7bnWluAOSNfMPesZW2xOQ-xsNqO47m55DA.ttf",
            "italic": "http://fonts.gstatic.com/s/fondamento/v7/y6TmwhSbZ8rYq7OTFyo7OS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fontdiner Swanky",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fontdinerswanky/v8/8_GxIO5ixMtn5P6COsF3TlBjMPLzPAFJwRBn-s1U7kA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Forum",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/forum/v8/MZUpsq1VfLrqv8eSDcbrrQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Francois One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/francoisone/v11/bYbkq2nU2TSx4SwFbz5sCC3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Frank Ruhl Libre",
           "category": "serif",
           "variants": [
            "300",
            "regular",
            "500",
            "700",
            "900"
           ],
           "subsets": [
            "hebrew",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "300": "http://fonts.gstatic.com/s/frankruhllibre/v3/y8NWif61iD8Hg8bGAmxFPOo9jvbqtCEVUIntIHarXsc.ttf",
            "regular": "http://fonts.gstatic.com/s/frankruhllibre/v3/yDLloNqBpFmakCImLv4OJkfFI6QBbouvcOFcz81E3Ek.ttf",
            "500": "http://fonts.gstatic.com/s/frankruhllibre/v3/y8NWif61iD8Hg8bGAmxFPC-WNtISbX_UO2d0wZPgXtk.ttf",
            "700": "http://fonts.gstatic.com/s/frankruhllibre/v3/y8NWif61iD8Hg8bGAmxFPDPYiZEMiRRbPdIFMoTwDbo.ttf",
            "900": "http://fonts.gstatic.com/s/frankruhllibre/v3/y8NWif61iD8Hg8bGAmxFPNRZIVFRjDx-6MOpcoWbVhA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Freckle Face",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/freckleface/v5/7-B8j9BPJgazdHIGqPNv8y3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fredericka the Great",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/frederickathegreat/v6/7Es8Lxoku-e5eOZWpxw18nrnet6gXN1McwdQxS1dVrI.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fredoka One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fredokaone/v5/QKfwXi-z-KtJAlnO2ethYqCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Freehand",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v9",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/freehand/v9/uEBQxvA0lnn_BrD6krlxMw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fresca",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fresca/v6/2q7Qm9sCo1tWvVgSDVWNIw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Frijole",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/frijole/v6/L2MfZse-2gCascuD-nLhWg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fruktur",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v10",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fruktur/v10/PnQvfEi1LssAvhJsCwH__w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Fugaz One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/fugazone/v7/5tteVDCwxsr8-5RuSiRWOw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "GFS Didot",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "greek"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gfsdidot/v7/jQKxZy2RU-h9tkPZcRVluA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "GFS Neohellenic",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "greek"
           ],
           "version": "v8",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gfsneohellenic/v8/B4xRqbn-tANVqVgamMsSDiayCZa0z7CpFzlkqoCHztc.ttf",
            "italic": "http://fonts.gstatic.com/s/gfsneohellenic/v8/KnaWrO4awITAqigQIIYXKkCTdomiyJpIzPbEbIES3rU.ttf",
            "700": "http://fonts.gstatic.com/s/gfsneohellenic/v8/7HwjPQa7qNiOsnUce2h4448_BwCLZY3eDSV6kppAwI8.ttf",
            "700italic": "http://fonts.gstatic.com/s/gfsneohellenic/v8/FwWjoX6XqT-szJFyqsu_GYFF0fM4h-krcpQk7emtCpE.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gabriela",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "cyrillic-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gabriela/v6/B-2ZfbAO3HDrxqV6lR5tdA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gafata",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gafata/v6/aTFqlki_3Dc3geo-FxHTvQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Galada",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "bengali",
            "latin"
           ],
           "version": "v3",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/galada/v3/xGkllHQb8OOCv9VJ6IObSA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Galdeano",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/galdeano/v7/ZKFMQI6HxEG1jOT0UGSZUg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Galindo",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/galindo/v5/2lafAS_ZEfB33OJryhXDUg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gentium Basic",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gentiumbasic/v9/KCktj43blvLkhOTolFn-MYtBLojGU5Qdl8-5NL4v70w.ttf",
            "italic": "http://fonts.gstatic.com/s/gentiumbasic/v9/qoFz4NSMaYC2UmsMAG3lyTj3mvXnCeAk09uTtmkJGRc.ttf",
            "700": "http://fonts.gstatic.com/s/gentiumbasic/v9/2qL6yulgGf0wwgOp-UqGyLNuTeOOLg3nUymsEEGmdO0.ttf",
            "700italic": "http://fonts.gstatic.com/s/gentiumbasic/v9/8N9-c_aQDJ8LbI1NGVMrwtswO1vWwP9exiF8s0wqW10.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gentium Book Basic",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gentiumbookbasic/v8/IRFxB2matTxrjZt6a3FUnrWDjKAyldGEr6eEi2MBNeY.ttf",
            "italic": "http://fonts.gstatic.com/s/gentiumbookbasic/v8/qHqW2lwKO8-uTfIkh8FsUfXfjMwrYnmPVsQth2IcAPY.ttf",
            "700": "http://fonts.gstatic.com/s/gentiumbookbasic/v8/T2vUYmWzlqUtgLYdlemGnaWESMHIjnSjm9UUxYtEOko.ttf",
            "700italic": "http://fonts.gstatic.com/s/gentiumbookbasic/v8/632u7TMIoFDWQYUaHFUp5PA2A9KyRZEkn4TZVuhsWRM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Geo",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/geo/v9/mJuJYk5Pww84B4uHAQ1XaA.ttf",
            "italic": "http://fonts.gstatic.com/s/geo/v9/8_r1wToF7nPdDuX1qxel6Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Geostar",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/geostar/v7/A8WQbhQbpYx3GWWaShJ9GA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Geostar Fill",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/geostarfill/v7/Y5ovXPPOHYTfQzK2aM-hui3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Germania One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/germaniaone/v5/3_6AyUql_-FbDi1e68jHdC3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gidugu",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v4",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gidugu/v4/Ey6Eq3hrT6MM58iFItFcgw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gilda Display",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gildadisplay/v5/8yAVUZLLZ3wb7dSsjix0CADHmap7fRWINAsw8-RaxNg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Give You Glory",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/giveyouglory/v7/DFEWZFgGmfseyIdGRJAxuBwwkpSPZdvjnMtysdqprfI.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Glass Antiqua",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/glassantiqua/v5/0yLrXKplgdUDIMz5TnCHNODcg5akpSnIcsPhLOFv7l8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Glegoo",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/glegoo/v6/2tf-h3n2A_SNYXEO0C8bKw.ttf",
            "700": "http://fonts.gstatic.com/s/glegoo/v6/TlLolbauH0-0Aiz1LUH5og.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gloria Hallelujah",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gloriahallelujah/v9/CA1k7SlXcY5kvI81M_R28Q3RdPdyebSUyJECJouPsvA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Goblin One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/goblinone/v7/331XtzoXgpVEvNTVcBJ_C_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gochi Hand",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gochihand/v8/KT1-WxgHsittJ34_20IfAPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gorditas",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gorditas/v5/uMgZhXUyH6qNGF3QsjQT5Q.ttf",
            "700": "http://fonts.gstatic.com/s/gorditas/v5/6-XCeknmxaon8AUqVkMnHaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Goudy Bookletter 1911",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/goudybookletter1911/v7/l5lwlGTN3pEY5Bf-rQEuIIjNDsyURsIKu4GSfvSE4mA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Graduate",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/graduate/v5/JpAmYLHqcIh9_Ff35HHwiA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Grand Hotel",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/grandhotel/v5/C_A8HiFZjXPpnMt38XnK7qCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gravitas One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gravitasone/v7/nBHdBv6zVNU8MtP6w9FwTS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Great Vibes",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/greatvibes/v5/4Mi5RG_9LjQYrTU55GN_L6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Griffy",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/griffy/v5/vWkyYGBSyE5xjnShNtJtzw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gruppo",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gruppo/v8/pS_JM0cK_piBZve-lfUq9w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gudea",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gudea/v5/S-4QqBlkMPiiA3jNeCR5yw.ttf",
            "italic": "http://fonts.gstatic.com/s/gudea/v5/7mNgsGw_vfS-uUgRVXNDSw.ttf",
            "700": "http://fonts.gstatic.com/s/gudea/v5/lsip4aiWhJ9bx172Y9FN_w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Gurajada",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/gurajada/v5/6Adfkl4PCRyq6XTENACEyA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Habibi",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/habibi/v6/YYyqXF6pWpL7kmKgS_2iUA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Halant",
           "category": "serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/halant/v4/dM3ItAOWNNod_Cf3MnLlEg.ttf",
            "regular": "http://fonts.gstatic.com/s/halant/v4/rEs7Jk3SVyt3cTx6DoTu1w.ttf",
            "500": "http://fonts.gstatic.com/s/halant/v4/tlsNj3K-hJKtiirTDtUbkQ.ttf",
            "600": "http://fonts.gstatic.com/s/halant/v4/zNR2WvI_V8o652vIZp3X4Q.ttf",
            "700": "http://fonts.gstatic.com/s/halant/v4/D9FN7OH89AuCmZDLHbPQfA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Hammersmith One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/hammersmithone/v8/FWNn6ITYqL6or7ZTmBxRhjjVlsJB_M_Q_LtZxsoxvlw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Hanalei",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/hanalei/v7/Sx8vVMBnXSQyK6Cn0CBJ3A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Hanalei Fill",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/hanaleifill/v6/5uPeWLnaDdtm4UBG26Ds6C3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Handlee",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/handlee/v6/6OfkXkyC0E5NZN80ED8u3A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Hanuman",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/hanuman/v11/hRhwOGGmElJSl6KSPvEnOQ.ttf",
            "700": "http://fonts.gstatic.com/s/hanuman/v11/lzzXZ2l84x88giDrbfq76vesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Happy Monkey",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/happymonkey/v6/c2o0ps8nkBmaOYctqBq1rS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Harmattan",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "arabic"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/harmattan/v2/xNM1nDKzsLfoCLQtMRztGA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Headland One",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/headlandone/v5/iGmBeOvQGfq9DSbjJ8jDVy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Heebo",
           "category": "sans-serif",
           "variants": [
            "100",
            "300",
            "regular",
            "500",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "hebrew",
            "latin"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/heebo/v3/SoQODIucfpkiveZloUR6ag.ttf",
            "300": "http://fonts.gstatic.com/s/heebo/v3/dg5T18yyjkKiU_9mmcbDSQ.ttf",
            "regular": "http://fonts.gstatic.com/s/heebo/v3/nyHCGMPliplPNqpssbDSIA.ttf",
            "500": "http://fonts.gstatic.com/s/heebo/v3/jDb70ZCwdD6JnmQU62ZQZA.ttf",
            "700": "http://fonts.gstatic.com/s/heebo/v3/NsBYEn6oWei8pPqytA07yA.ttf",
            "800": "http://fonts.gstatic.com/s/heebo/v3/h4CV2Qq56LKIinGGOStvsw.ttf",
            "900": "http://fonts.gstatic.com/s/heebo/v3/uDfzHw3R0Bfa6HyIIcj-ow.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Henny Penny",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/hennypenny/v5/XRgo3ogXyi3tpsFfjImRF6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Herr Von Muellerhoff",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/herrvonmuellerhoff/v7/mmy24EUmk4tjm4gAEjUd7NLGIYrUsBdh-JWHYgiDiMU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Hind",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/hind/v8/qa346Adgv9kPDXoD1my4kA.ttf",
            "regular": "http://fonts.gstatic.com/s/hind/v8/mktFHh5Z5P9YjGKSslSUtA.ttf",
            "500": "http://fonts.gstatic.com/s/hind/v8/2cs8RCVcYtiv4iNDH1UsQQ.ttf",
            "600": "http://fonts.gstatic.com/s/hind/v8/TUKUmFMXSoxloBP1ni08oA.ttf",
            "700": "http://fonts.gstatic.com/s/hind/v8/cXJJavLdUbCfjxlsA6DqTw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Hind Guntur",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "telugu"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/hindguntur/v3/Szg33M7ab5MTWe-PWAcNAi9-WlPSxbfiI49GsXo3q0g.ttf",
            "regular": "http://fonts.gstatic.com/s/hindguntur/v3/MXz-KyAeVZstlFz6v-5SC6CWcynf_cDxXwCLxiixG1c.ttf",
            "500": "http://fonts.gstatic.com/s/hindguntur/v3/Szg33M7ab5MTWe-PWAcNAsCNfqCYlB_eIx7H1TVXe60.ttf",
            "600": "http://fonts.gstatic.com/s/hindguntur/v3/Szg33M7ab5MTWe-PWAcNApZ7xm-Bj30Bj2KNdXDzSZg.ttf",
            "700": "http://fonts.gstatic.com/s/hindguntur/v3/Szg33M7ab5MTWe-PWAcNAne1Pd76Vl7zRpE7NLJQ7XU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Hind Madurai",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "tamil",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/hindmadurai/v3/sdSJTZLdRXJhVTP92m2S66cQoVhARpoaILP7amxE_8g.ttf",
            "regular": "http://fonts.gstatic.com/s/hindmadurai/v3/pJpl47LatORZNWf8rgdiyS3USBnSvpkopQaUR-2r7iU.ttf",
            "500": "http://fonts.gstatic.com/s/hindmadurai/v3/sdSJTZLdRXJhVTP92m2S65MQuUSAwdHsY8ov_6tk1oA.ttf",
            "600": "http://fonts.gstatic.com/s/hindmadurai/v3/sdSJTZLdRXJhVTP92m2S62v8CylhIUtwUiYO7Z2wXbE.ttf",
            "700": "http://fonts.gstatic.com/s/hindmadurai/v3/sdSJTZLdRXJhVTP92m2S60D2ttfZwueP-QU272T9-k4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Hind Siliguri",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "bengali",
            "latin",
            "latin-ext"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/hindsiliguri/v4/fBpmjMpv5Rh6S25yVfWJnzoJ52uD-1fmXmi8u0n_zsc.ttf",
            "regular": "http://fonts.gstatic.com/s/hindsiliguri/v4/f2eEi2pbIa8eBfNwpUl0Am_MnNA9OgK8I1F23mNWOpE.ttf",
            "500": "http://fonts.gstatic.com/s/hindsiliguri/v4/fBpmjMpv5Rh6S25yVfWJn__2zpxNHQ3utWt_82o9dAo.ttf",
            "600": "http://fonts.gstatic.com/s/hindsiliguri/v4/fBpmjMpv5Rh6S25yVfWJn-x91FDzFvnud68bXrNkpDA.ttf",
            "700": "http://fonts.gstatic.com/s/hindsiliguri/v4/fBpmjMpv5Rh6S25yVfWJn6iiXuG_rGcOxkuidirlnJE.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Hind Vadodara",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "gujarati",
            "latin-ext"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/hindvadodara/v4/KrZ6f_YevRawHvh0qDBkTbDwfZ__Dotj_J8NiWv76DQ.ttf",
            "regular": "http://fonts.gstatic.com/s/hindvadodara/v4/9c6KKeibr6NtFqknnNxZB-Dcg5akpSnIcsPhLOFv7l8.ttf",
            "500": "http://fonts.gstatic.com/s/hindvadodara/v4/KrZ6f_YevRawHvh0qDBkTZzEKvFIU9WyojfbAkhDb6c.ttf",
            "600": "http://fonts.gstatic.com/s/hindvadodara/v4/KrZ6f_YevRawHvh0qDBkTfgXs2VXrZsRiQ1c96pXZKI.ttf",
            "700": "http://fonts.gstatic.com/s/hindvadodara/v4/KrZ6f_YevRawHvh0qDBkTYGjoH95IEFGA7BjhXnx_eg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Holtwood One SC",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/holtwoodonesc/v8/sToOq3cIxbfnhbEkgYNuBbAgSRh1LpJXlLfl8IbsmHg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Homemade Apple",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/homemadeapple/v8/yg3UMEsefgZ8IHz_ryz86BiPOmFWYV1WlrJkRafc4c0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Homenaje",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/homenaje/v7/v0YBU0iBRrGdVjDNQILxtA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "IM Fell DW Pica",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/imfelldwpica/v7/W81bfaWiUicLSPbJhW-ATsA5qm663gJGVdtpamafG5A.ttf",
            "italic": "http://fonts.gstatic.com/s/imfelldwpica/v7/alQJ8SK5aSOZVaelYoyT4PL2asmh5DlYQYCosKo6yQs.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "IM Fell DW Pica SC",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/imfelldwpicasc/v7/xBKKJV4z2KsrtQnmjGO17JZ9RBdEL0H9o5qzT1Rtof4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "IM Fell Double Pica",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/imfelldoublepica/v7/yN1wY_01BkQnO0LYAhXdUol14jEdVOhEmvtCMCVwYak.ttf",
            "italic": "http://fonts.gstatic.com/s/imfelldoublepica/v7/64odUh2hAw8D9dkFKTlWYq0AWwkgdQfsRHec8TYi4mI.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "IM Fell Double Pica SC",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/imfelldoublepicasc/v7/jkrUtrLFpMw4ZazhfkKsGwc4LoC4OJUqLw9omnT3VOU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "IM Fell English",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/imfellenglish/v7/xwIisCqGFi8pff-oa9uSVHGNmx1fDm-u2eBJHQkdrmk.ttf",
            "italic": "http://fonts.gstatic.com/s/imfellenglish/v7/Z3cnIAI_L3XTRfz4JuZKbuewladMPCWTthtMv9cPS-c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "IM Fell English SC",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/imfellenglishsc/v7/h3Tn6yWfw4b5qaLD1RWvz5ATixNthKRRR1XVH3rJNiw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "IM Fell French Canon",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/imfellfrenchcanon/v7/iKB0WL1BagSpNPz3NLMdsJ3V2FNpBrlLSvqUnERhBP8.ttf",
            "italic": "http://fonts.gstatic.com/s/imfellfrenchcanon/v7/owCuNQkLLFW7TBBPJbMnhRa-QL94KdW80H29tcyld2A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "IM Fell French Canon SC",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/imfellfrenchcanonsc/v7/kA3bS19-tQbeT_iG32EZmaiyyzHwYrAbmNulTz423iM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "IM Fell Great Primer",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/imfellgreatprimer/v7/AL8ALGNthei20f9Cu3e93rgeX3ROgtTz44CitKAxzKI.ttf",
            "italic": "http://fonts.gstatic.com/s/imfellgreatprimer/v7/1a-artkXMVg682r7TTxVY1_YG2SFv8Ma7CxRl1S3o7g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "IM Fell Great Primer SC",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/imfellgreatprimersc/v7/A313vRj97hMMGFjt6rgSJtRg-ciw1Y27JeXb2Zv4lZQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Iceberg",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/iceberg/v5/p2XVm4M-N0AOEEOymFKC5w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Iceland",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/iceland/v6/kq3uTMGgvzWGNi39B_WxGA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Imprima",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/imprima/v5/eRjquWLjwLGnTEhLH7u3kA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Inconsolata",
           "category": "monospace",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v16",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/inconsolata/v16/7bMKuoy6Nh0ft0SHnIGMuaCWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/inconsolata/v16/AIed271kqQlcIRSOnQH0yXe1Pd76Vl7zRpE7NLJQ7XU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Inder",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/inder/v6/C38TwecLTfKxIHDc_Adcrw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Indie Flower",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-11",
           "files": {
            "regular": "http://fonts.gstatic.com/s/indieflower/v9/10JVD_humAd5zP2yrFqw6i3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Inika",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/inika/v5/eZCrULQGaIxkrRoGz_DjhQ.ttf",
            "700": "http://fonts.gstatic.com/s/inika/v5/bl3ZoTyrWsFun2zYbsgJrA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Inknut Antiqua",
           "category": "serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-09",
           "files": {
            "300": "http://fonts.gstatic.com/s/inknutantiqua/v3/CagoW52rBcslcXzHh6tVIg6hmPNSXwHGnJQCeQHKUMo.ttf",
            "regular": "http://fonts.gstatic.com/s/inknutantiqua/v3/VlmmTfOrxr3HfcnhMueX9arFJ4O13IHVxZbM6yoslpo.ttf",
            "500": "http://fonts.gstatic.com/s/inknutantiqua/v3/CagoW52rBcslcXzHh6tVIiYCDvi1XFzRnTV7qUFsNgk.ttf",
            "600": "http://fonts.gstatic.com/s/inknutantiqua/v3/CagoW52rBcslcXzHh6tVIjLEgY6PI0GrY6L00mykcEQ.ttf",
            "700": "http://fonts.gstatic.com/s/inknutantiqua/v3/CagoW52rBcslcXzHh6tVIlRhfXn9P4_QueZ7VkUHUNc.ttf",
            "800": "http://fonts.gstatic.com/s/inknutantiqua/v3/CagoW52rBcslcXzHh6tVInARjXVu2t2krcNTHiCb1qY.ttf",
            "900": "http://fonts.gstatic.com/s/inknutantiqua/v3/CagoW52rBcslcXzHh6tVIrTsNy1JrFNT1qKy8j7W3CU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Irish Grover",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/irishgrover/v8/kUp7uUPooL-KsLGzeVJbBC3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Istok Web",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/istokweb/v11/RYLSjEXQ0nNtLLc4n7--dQ.ttf",
            "italic": "http://fonts.gstatic.com/s/istokweb/v11/kvcT2SlTjmGbC3YlZxmrl6CWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/istokweb/v11/2koEo4AKFSvK4B52O_Mwai3USBnSvpkopQaUR-2r7iU.ttf",
            "700italic": "http://fonts.gstatic.com/s/istokweb/v11/ycQ3g52ELrh3o_HYCNNUw3e1Pd76Vl7zRpE7NLJQ7XU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Italiana",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/italiana/v6/dt95fkCSTOF-c6QNjwSycA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Italianno",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/italianno/v7/HsyHnLpKf8uP7aMpDQHZmg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Itim",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "thai"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/itim/v2/HHV9WK2x5lUkc5bxMXG8Tw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Jacques Francois",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/jacquesfrancois/v5/_-0XWPQIW6tOzTHg4KaJ_M13D_4KM32Q4UmTSjpuNGQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Jacques Francois Shadow",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/jacquesfrancoisshadow/v5/V14y0H3vq56fY9SV4OL_FASt0D_oLVawA8L8b9iKjbs.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Jaldi",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/jaldi/v3/x1vR-bPW9a1EB-BUVqttCw.ttf",
            "700": "http://fonts.gstatic.com/s/jaldi/v3/OIbtgjjEp3aVWtjF6WY8mA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Jim Nightshade",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/jimnightshade/v5/_n43lYHXVWNgXegdYRIK9CF1W_bo0EdycfH0kHciIic.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Jockey One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/jockeyone/v7/cAucnOZLvFo07w2AbufBCfesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Jolly Lodger",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/jollylodger/v5/RX8HnkBgaEKQSHQyP9itiS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Jomhuria",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "arabic"
           ],
           "version": "v3",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/jomhuria/v3/hrvsccQpBliIgor15WxE6g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Josefin Sans",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v12",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/josefinsans/v12/q9w3H4aeBxj0hZ8Osfi3d8SVQ0giZ-l_NELu3lgGyYw.ttf",
            "100italic": "http://fonts.gstatic.com/s/josefinsans/v12/s7-P1gqRNRNn-YWdOYnAOXXcj1rQwlNLIS625o-SrL0.ttf",
            "300": "http://fonts.gstatic.com/s/josefinsans/v12/C6HYlRF50SGJq1XyXj04z6cQoVhARpoaILP7amxE_8g.ttf",
            "300italic": "http://fonts.gstatic.com/s/josefinsans/v12/ppse0J9fKSaoxCIIJb33Gyna0FLWfcB-J_SAYmcAXaI.ttf",
            "regular": "http://fonts.gstatic.com/s/josefinsans/v12/xgzbb53t8j-Mo-vYa23n5i3USBnSvpkopQaUR-2r7iU.ttf",
            "italic": "http://fonts.gstatic.com/s/josefinsans/v12/q9w3H4aeBxj0hZ8Osfi3d_MZXuCXbOrAvx5R0IT5Oyo.ttf",
            "600": "http://fonts.gstatic.com/s/josefinsans/v12/C6HYlRF50SGJq1XyXj04z2v8CylhIUtwUiYO7Z2wXbE.ttf",
            "600italic": "http://fonts.gstatic.com/s/josefinsans/v12/ppse0J9fKSaoxCIIJb33G4R-5-urNOGAobhAyctHvW8.ttf",
            "700": "http://fonts.gstatic.com/s/josefinsans/v12/C6HYlRF50SGJq1XyXj04z0D2ttfZwueP-QU272T9-k4.ttf",
            "700italic": "http://fonts.gstatic.com/s/josefinsans/v12/ppse0J9fKSaoxCIIJb33G_As9-1nE9qOqhChW0m4nDE.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Josefin Slab",
           "category": "serif",
           "variants": [
            "100",
            "100italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/josefinslab/v8/etsUjZYO8lTLU85lDhZwUsSVQ0giZ-l_NELu3lgGyYw.ttf",
            "100italic": "http://fonts.gstatic.com/s/josefinslab/v8/8BjDChqLgBF3RJKfwHIYh3Xcj1rQwlNLIS625o-SrL0.ttf",
            "300": "http://fonts.gstatic.com/s/josefinslab/v8/NbE6ykYuM2IyEwxQxOIi2KcQoVhARpoaILP7amxE_8g.ttf",
            "300italic": "http://fonts.gstatic.com/s/josefinslab/v8/af9sBoKGPbGO0r21xJulyyna0FLWfcB-J_SAYmcAXaI.ttf",
            "regular": "http://fonts.gstatic.com/s/josefinslab/v8/46aYWdgz-1oFX11flmyEfS3USBnSvpkopQaUR-2r7iU.ttf",
            "italic": "http://fonts.gstatic.com/s/josefinslab/v8/etsUjZYO8lTLU85lDhZwUvMZXuCXbOrAvx5R0IT5Oyo.ttf",
            "600": "http://fonts.gstatic.com/s/josefinslab/v8/NbE6ykYuM2IyEwxQxOIi2Gv8CylhIUtwUiYO7Z2wXbE.ttf",
            "600italic": "http://fonts.gstatic.com/s/josefinslab/v8/af9sBoKGPbGO0r21xJuly4R-5-urNOGAobhAyctHvW8.ttf",
            "700": "http://fonts.gstatic.com/s/josefinslab/v8/NbE6ykYuM2IyEwxQxOIi2ED2ttfZwueP-QU272T9-k4.ttf",
            "700italic": "http://fonts.gstatic.com/s/josefinslab/v8/af9sBoKGPbGO0r21xJuly_As9-1nE9qOqhChW0m4nDE.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Joti One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/jotione/v5/P3r_Th0ESHJdzunsvWgUfQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Judson",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/judson/v10/znM1AAs0eytUaJzf1CrYZQ.ttf",
            "italic": "http://fonts.gstatic.com/s/judson/v10/GVqQW9P52ygW-ySq-CLwAA.ttf",
            "700": "http://fonts.gstatic.com/s/judson/v10/he4a2LwiPJc7r8x0oKCKiA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Julee",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/julee/v7/CAib-jsUsSO8SvVRnE9fHA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Julius Sans One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/juliussansone/v6/iU65JP9acQHPDLkdalCF7jjVlsJB_M_Q_LtZxsoxvlw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Junge",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/junge/v5/j4IXCXtxrw9qIBheercp3A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Jura",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/jura/v9/Rqx_xy1UnN0C7wD3FUSyPQ.ttf",
            "regular": "http://fonts.gstatic.com/s/jura/v9/YAWMwF3sN0KCbynMq-Yr_Q.ttf",
            "500": "http://fonts.gstatic.com/s/jura/v9/16xhfjHCiaLj3tsqqgmtGg.ttf",
            "600": "http://fonts.gstatic.com/s/jura/v9/iwseduOwJSdY8wQ1Y6CJdA.ttf",
            "700": "http://fonts.gstatic.com/s/jura/v9/k0wz0WR1Y0M_AuROdfv4xQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Just Another Hand",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/justanotherhand/v9/fKV8XYuRNNagXr38eqbRf99BnJIEGrvoojniP57E51c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Just Me Again Down Here",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/justmeagaindownhere/v9/sN06iTc9ITubLTgXoG-kc3M9eVLpVTSK6TqZTIgBrWQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kadwa",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "devanagari"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kadwa/v2/VwEN8oKGqaa0ug9kRpvSSg.ttf",
            "700": "http://fonts.gstatic.com/s/kadwa/v2/NFPZaBfekj_Io-7vUMz4Ww.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kalam",
           "category": "handwriting",
           "variants": [
            "300",
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/kalam/v8/MgQQlk1SgPEHdlkWMNh7Jg.ttf",
            "regular": "http://fonts.gstatic.com/s/kalam/v8/hNEJkp2K-aql7e5WQish4Q.ttf",
            "700": "http://fonts.gstatic.com/s/kalam/v8/95nLItUGyWtNLZjSckluLQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kameron",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kameron/v8/9r8HYhqDSwcq9WMjupL82A.ttf",
            "700": "http://fonts.gstatic.com/s/kameron/v8/rabVVbzlflqvmXJUFlKnu_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kanit",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "thai"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/kanit/v3/CYl4qOK-NWwZp3iTKW1eIA.ttf",
            "100italic": "http://fonts.gstatic.com/s/kanit/v3/NLNtc56MpXmHl1yOrop8oQ.ttf",
            "200": "http://fonts.gstatic.com/s/kanit/v3/wfLWkj1C4tYl7MoiFWS3bA.ttf",
            "200italic": "http://fonts.gstatic.com/s/kanit/v3/D8gkrAAM2bvNJ-1i4ot-1_esZW2xOQ-xsNqO47m55DA.ttf",
            "300": "http://fonts.gstatic.com/s/kanit/v3/SM5qHynYGdOmMKEwGUFIPA.ttf",
            "300italic": "http://fonts.gstatic.com/s/kanit/v3/IePislKOKy3Bqfpb9V5VM_esZW2xOQ-xsNqO47m55DA.ttf",
            "regular": "http://fonts.gstatic.com/s/kanit/v3/L6VKvM17ZmevDynOiw7H9w.ttf",
            "italic": "http://fonts.gstatic.com/s/kanit/v3/sHLq5U0-T0oSMTnwTKgv-A.ttf",
            "500": "http://fonts.gstatic.com/s/kanit/v3/GxoU_USIJyIy8WIcYSUO2g.ttf",
            "500italic": "http://fonts.gstatic.com/s/kanit/v3/hrCiWCaNv9AaF0mDY1F2zPesZW2xOQ-xsNqO47m55DA.ttf",
            "600": "http://fonts.gstatic.com/s/kanit/v3/n_qoIVxojeQY0D1pvoNDhA.ttf",
            "600italic": "http://fonts.gstatic.com/s/kanit/v3/9BkP85yRDoVayTWQwdGLqPesZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/kanit/v3/kEGmYvO8My36j5ILmbUPRg.ttf",
            "700italic": "http://fonts.gstatic.com/s/kanit/v3/WNo3ZZ9xtOZJknNlvHAFWfesZW2xOQ-xsNqO47m55DA.ttf",
            "800": "http://fonts.gstatic.com/s/kanit/v3/YTp-zAuKXxwnA1YnJIF1rg.ttf",
            "800italic": "http://fonts.gstatic.com/s/kanit/v3/qiTGrW5sCa9UQp841fWjc_esZW2xOQ-xsNqO47m55DA.ttf",
            "900": "http://fonts.gstatic.com/s/kanit/v3/1NIEkusi3bG3GgO9Hor3fQ.ttf",
            "900italic": "http://fonts.gstatic.com/s/kanit/v3/ogN5dFD1r4BfxNV4Nb-TXfesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kantumruy",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "700"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v4",
           "lastModified": "2017-10-09",
           "files": {
            "300": "http://fonts.gstatic.com/s/kantumruy/v4/ERRwQE0WG5uanaZWmOFXNi3USBnSvpkopQaUR-2r7iU.ttf",
            "regular": "http://fonts.gstatic.com/s/kantumruy/v4/kQfXNYElQxr5dS8FyjD39Q.ttf",
            "700": "http://fonts.gstatic.com/s/kantumruy/v4/gie_zErpGf_rNzs920C2Ji3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Karla",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/karla/v6/78UgGRwJFkhqaoFimqoKpQ.ttf",
            "italic": "http://fonts.gstatic.com/s/karla/v6/51UBKly9RQOnOkj95ZwEFw.ttf",
            "700": "http://fonts.gstatic.com/s/karla/v6/JS501sZLxZ4zraLQdncOUA.ttf",
            "700italic": "http://fonts.gstatic.com/s/karla/v6/3YDyi09gQjCRh-5-SVhTTvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Karma",
           "category": "serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/karma/v7/lH6ijJnguWR2Sz7tEl6MQQ.ttf",
            "regular": "http://fonts.gstatic.com/s/karma/v7/wvqTxAGBUrTqU0urTEoPIw.ttf",
            "500": "http://fonts.gstatic.com/s/karma/v7/9YGjxi6Hcvz2Kh-rzO_cAw.ttf",
            "600": "http://fonts.gstatic.com/s/karma/v7/h_CVzXXtqSxjfS2sIwaejA.ttf",
            "700": "http://fonts.gstatic.com/s/karma/v7/smuSM08oApsQPPVYbHd1CA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Katibeh",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "arabic"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/katibeh/v3/Q-SA43uWR2uu3wBIvedotA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kaushan Script",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kaushanscript/v6/qx1LSqts-NtiKcLw4N03IBnpV0hQCek3EmWnCPrvGRM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kavivanar",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "tamil",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kavivanar/v3/VLDrdUtF1irKFc8rFWgDaw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kavoon",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kavoon/v6/382m-6baKXqJFQjEgobt6Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kdam Thmor",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v4",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kdamthmor/v4/otCdP6UU-VBIrBfVDWBQJ_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Keania One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/keaniaone/v5/PACrDKZWngXzgo-ucl6buvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kelly Slab",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kellyslab/v7/F_2oS1e9XdYx1MAi8XEVefesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kenia",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kenia/v9/OLM9-XfITK9PsTLKbGBrwg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Khand",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/khand/v6/072zRl4OU9Pinjjkg174LA.ttf",
            "regular": "http://fonts.gstatic.com/s/khand/v6/HdLdTNFqNIDGJZl1ZEj84w.ttf",
            "500": "http://fonts.gstatic.com/s/khand/v6/46_p-SqtuMe56nxQdteWxg.ttf",
            "600": "http://fonts.gstatic.com/s/khand/v6/zggGWYIiPJyMTgkfxP_kaA.ttf",
            "700": "http://fonts.gstatic.com/s/khand/v6/0I0UWaN-X5QBmfexpXKhqg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Khmer",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/khmer/v10/vWaBJIbaQuBNz02ALIKJ3A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Khula",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "600",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/khula/v3/_1LySU5Upq-sc4OZ1b_GIw.ttf",
            "regular": "http://fonts.gstatic.com/s/khula/v3/izcPIFyCSd16XI1Ak_Wk7Q.ttf",
            "600": "http://fonts.gstatic.com/s/khula/v3/4ZH86Hce-aeFDaedTnbkbg.ttf",
            "700": "http://fonts.gstatic.com/s/khula/v3/UGVExGl-Jjs-YPpGv-MZ6w.ttf",
            "800": "http://fonts.gstatic.com/s/khula/v3/Sccp_oOo8FWgbx5smie7xQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kite One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kiteone/v5/8ojWmgUc97m0f_i6sTqLoQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Knewave",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/knewave/v6/KGHM4XWr4iKnBMqzZLkPBg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kotta One",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kottaone/v5/AB2Q7hVw6niJYDgLvFXu5w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Koulen",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/koulen/v11/AAYOK8RSRO7FTskTzFuzNw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kranky",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kranky/v8/C8dxxTS99-fZ84vWk8SDrg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kreon",
           "category": "serif",
           "variants": [
            "300",
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/kreon/v11/HKtJRiq5C2zbq5N1IX32sA.ttf",
            "regular": "http://fonts.gstatic.com/s/kreon/v11/zA_IZt0u0S3cvHJu-n1oEg.ttf",
            "700": "http://fonts.gstatic.com/s/kreon/v11/jh0dSmaPodjxISiblIUTkw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kristi",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kristi/v9/aRsgBQrkQkMlu4UPSnJyOQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Krona One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kronaone/v5/zcQj4ljqTo166AdourlF9w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kumar One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "gujarati",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kumarone/v2/YmcJD6Wky1clGYY5OD-BkQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kumar One Outline",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "gujarati",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kumaroneoutline/v2/hnQF47H-55qiLAGgq7C3QyxhoCTLJoiJ-y-zew8F8j0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Kurale",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "devanagari",
            "cyrillic-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/kurale/v3/rxeyIcvQlT4XAWwNbXFCfw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "La Belle Aurore",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/labelleaurore/v8/Irdbc4ASuUoWDjd_Wc3md123K2iuuhwZgaKapkyRTY8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Laila",
           "category": "serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/laila/v4/bLbIVEZF3IWSZ-in72GJvA.ttf",
            "regular": "http://fonts.gstatic.com/s/laila/v4/6iYor3edprH7360qtBGoag.ttf",
            "500": "http://fonts.gstatic.com/s/laila/v4/tkf8VtFvW9g3VsxQCA6WOQ.ttf",
            "600": "http://fonts.gstatic.com/s/laila/v4/3EMP2L6JRQ4GaHIxCldCeA.ttf",
            "700": "http://fonts.gstatic.com/s/laila/v4/R7P4z1xjcjecmjZ9GyhqHQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lakki Reddy",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lakkireddy/v4/Q5EpFa91FjW37t0FCnedaKCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lalezar",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "arabic"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lalezar/v2/k4_MPf09PGmL7oyGdPKwcg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lancelot",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lancelot/v7/XMT7T_oo_MQUGAnU2v-sdA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lateef",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "arabic"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lateef/v11/PAsKCgi1qc7XPwvzo_I-DQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lato",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "700",
            "700italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v14",
           "lastModified": "2017-10-11",
           "files": {
            "100": "http://fonts.gstatic.com/s/lato/v14/Upp-ka9rLQmHYCsFgwL-eg.ttf",
            "100italic": "http://fonts.gstatic.com/s/lato/v14/zLegi10uS_9-fnUDISl0KA.ttf",
            "300": "http://fonts.gstatic.com/s/lato/v14/Ja02qOppOVq9jeRjWekbHg.ttf",
            "300italic": "http://fonts.gstatic.com/s/lato/v14/dVebFcn7EV7wAKwgYestUg.ttf",
            "regular": "http://fonts.gstatic.com/s/lato/v14/h7rISIcQapZBpei-sXwIwg.ttf",
            "italic": "http://fonts.gstatic.com/s/lato/v14/P_dJOFJylV3A870UIOtr0w.ttf",
            "700": "http://fonts.gstatic.com/s/lato/v14/iX_QxBBZLhNj5JHlTzHQzg.ttf",
            "700italic": "http://fonts.gstatic.com/s/lato/v14/WFcZakHrrCKeUJxHA4T_gw.ttf",
            "900": "http://fonts.gstatic.com/s/lato/v14/8TPEV6NbYWZlNsXjbYVv7w.ttf",
            "900italic": "http://fonts.gstatic.com/s/lato/v14/draWperrI7n2xi35Cl08fA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "League Script",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/leaguescript/v8/wnRFLvfabWK_DauqppD6vSeUSrabuTpOsMEiRLtKwk0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Leckerli One",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/leckerlione/v8/S2Y_iLrItTu8kIJTkS7DrC3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ledger",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ledger/v5/G432jp-tahOfWHbCYkI0jw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lekton",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lekton/v8/r483JYmxf5PjIm4jVAm8Yg.ttf",
            "italic": "http://fonts.gstatic.com/s/lekton/v8/_UbDIPBA1wDqSbhp-OED7A.ttf",
            "700": "http://fonts.gstatic.com/s/lekton/v8/WZw-uL8WTkx3SBVfTlevXQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lemon",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lemon/v6/wed1nNu4LNSu-3RoRVUhUw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lemonada",
           "category": "display",
           "variants": [
            "300",
            "regular",
            "600",
            "700"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "arabic"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/lemonada/v3/uM3MufQOcwGHuruj4TsXiqCWcynf_cDxXwCLxiixG1c.ttf",
            "regular": "http://fonts.gstatic.com/s/lemonada/v3/pkzws3AUXmaaAzOi7aydSQ.ttf",
            "600": "http://fonts.gstatic.com/s/lemonada/v3/9Vd4MNKsOxNyLzlfTXdKLqCWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/lemonada/v3/9jKcm4hRI511-Dy7FFfQ3aCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Libre Barcode 128",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-23",
           "files": {
            "regular": "http://fonts.gstatic.com/s/librebarcode128/v5/mJ_rGOyyL62_i4eysdBvxEaNJhdpbyHQuRiGjlHceQo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Libre Barcode 128 Text",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-23",
           "files": {
            "regular": "http://fonts.gstatic.com/s/librebarcode128text/v5/T1o66XlW_PeuHiRa8wDOJDfWl2h5aCwBu15s5iWPtdk.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Libre Barcode 39",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-23",
           "files": {
            "regular": "http://fonts.gstatic.com/s/librebarcode39/v5/tsmYkcVN_FjeCmyWhRNQuDLD7PrtP9qwC5bVQ-6ZBpw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Libre Barcode 39 Extended",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v4",
           "lastModified": "2017-10-23",
           "files": {
            "regular": "http://fonts.gstatic.com/s/librebarcode39extended/v4/fb2-vuy0PLrmtXyLBPV4KGYAiLTSvZR2kkYPJthhKEg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Libre Barcode 39 Extended Text",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v4",
           "lastModified": "2017-10-23",
           "files": {
            "regular": "http://fonts.gstatic.com/s/librebarcode39extendedtext/v4/wJsqK3E245PKDhdHYS7MabGP_8dGDh0UJYBW4DYg-cv00s133LT-tR5tU-vU7gLU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Libre Barcode 39 Text",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-23",
           "files": {
            "regular": "http://fonts.gstatic.com/s/librebarcode39text/v5/O4inMvtTcDsw_GI-nhT1nhLP3W-fKNeNuxNx_t55A8U.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Libre Baskerville",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/librebaskerville/v5/pR0sBQVcY0JZc_ciXjFsKyyZRYCSvpCzQKuMWnP5NDY.ttf",
            "italic": "http://fonts.gstatic.com/s/librebaskerville/v5/QHIOz1iKF3bIEzRdDFaf5QnhapNS5Oi8FPrBRDLbsW4.ttf",
            "700": "http://fonts.gstatic.com/s/librebaskerville/v5/kH7K4InNTm7mmOXXjrA5v-xuswJKUVpBRfYFpz0W3Iw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Libre Franklin",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/librefranklin/v2/zrsyK9EytLQ07oRM9IZIsX6Zf0VB_l-7q6pFtcZSRCs.ttf",
            "100italic": "http://fonts.gstatic.com/s/librefranklin/v2/LHzsuUmxr4UY-IoiG8pRK4gsWNE1DYiT_eIOcNe2Au4.ttf",
            "200": "http://fonts.gstatic.com/s/librefranklin/v2/1_DGDtljMiPWFs5rl_p0yCwKTB4uIbnDXE2hyxZaFPY.ttf",
            "200italic": "http://fonts.gstatic.com/s/librefranklin/v2/7_V210XP3LBEtEwiCTqho0lu1sSkaQaYEjN61aJ3i1I.ttf",
            "300": "http://fonts.gstatic.com/s/librefranklin/v2/1_DGDtljMiPWFs5rl_p0yMhKJW3W9-339CFS_Lie1us.ttf",
            "300italic": "http://fonts.gstatic.com/s/librefranklin/v2/7_V210XP3LBEtEwiCTqho14je5cfhxzx5bEvSaoyQQI.ttf",
            "regular": "http://fonts.gstatic.com/s/librefranklin/v2/PFwjf3aDdAQPvNKUrT3U7_fSnedoLXQQjURyDxluu8g.ttf",
            "italic": "http://fonts.gstatic.com/s/librefranklin/v2/zrsyK9EytLQ07oRM9IZIsX5kKxjpQfTpnFf2SrDLxlg.ttf",
            "500": "http://fonts.gstatic.com/s/librefranklin/v2/1_DGDtljMiPWFs5rl_p0yMBjwrbmxH6gp8HgxjPD8qo.ttf",
            "500italic": "http://fonts.gstatic.com/s/librefranklin/v2/7_V210XP3LBEtEwiCTqho5VcuOW5XbZIr02vW37iuvg.ttf",
            "600": "http://fonts.gstatic.com/s/librefranklin/v2/1_DGDtljMiPWFs5rl_p0yORt4MKdIUjA60qLK3wI2m8.ttf",
            "600italic": "http://fonts.gstatic.com/s/librefranklin/v2/7_V210XP3LBEtEwiCTqhowNPRgU5g4Xymf9hgRWrbNs.ttf",
            "700": "http://fonts.gstatic.com/s/librefranklin/v2/1_DGDtljMiPWFs5rl_p0yEnStGWSv3WdwjmyyI8xc7Q.ttf",
            "700italic": "http://fonts.gstatic.com/s/librefranklin/v2/7_V210XP3LBEtEwiCTqhow7kn3RFjf4gfwsdsBE-Rf4.ttf",
            "800": "http://fonts.gstatic.com/s/librefranklin/v2/1_DGDtljMiPWFs5rl_p0yKltwG0cydF-uC1kFVv1hts.ttf",
            "800italic": "http://fonts.gstatic.com/s/librefranklin/v2/7_V210XP3LBEtEwiCTqho80d7u0uHUbaRkK-cNyim1w.ttf",
            "900": "http://fonts.gstatic.com/s/librefranklin/v2/1_DGDtljMiPWFs5rl_p0yF7duMYIKwoQ5QsTL00fobw.ttf",
            "900italic": "http://fonts.gstatic.com/s/librefranklin/v2/7_V210XP3LBEtEwiCTqho0THpHUXJVnEwH4tSjkF0wg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Life Savers",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lifesavers/v7/g49cUDk4Y1P0G5NMkMAm7qCWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/lifesavers/v7/THQKqChyYUm97rNPVFdGGXe1Pd76Vl7zRpE7NLJQ7XU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lilita One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lilitaone/v5/vTxJQjbNV6BCBHx8sGDCVvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lily Script One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lilyscriptone/v5/uPWsLVW8uiXqIBnE8ZwGPDjVlsJB_M_Q_LtZxsoxvlw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Limelight",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/limelight/v8/5dTfN6igsXjLjOy8QQShcg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Linden Hill",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lindenhill/v7/UgsC0txqd-E1yjvjutwm_KCWcynf_cDxXwCLxiixG1c.ttf",
            "italic": "http://fonts.gstatic.com/s/lindenhill/v7/OcS3bZcu8vJvIDH8Zic83keOrDcLawS7-ssYqLr2Xp4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lobster",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v20",
           "lastModified": "2017-11-07",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lobster/v20/9LpJGtNuM1D8FAZ2BkJH2Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lobster Two",
           "category": "display",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lobstertwo/v10/xb9aY4w9ceh8JRzobID1naCWcynf_cDxXwCLxiixG1c.ttf",
            "italic": "http://fonts.gstatic.com/s/lobstertwo/v10/Ul_16MSbfayQv1I4QhLEoEeOrDcLawS7-ssYqLr2Xp4.ttf",
            "700": "http://fonts.gstatic.com/s/lobstertwo/v10/bmdxOflBqMqjEC0-kGsIiHe1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "700italic": "http://fonts.gstatic.com/s/lobstertwo/v10/LEkN2_no_6kFvRfiBZ8xpM_zJjSACmk0BRPxQqhnNLU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Londrina Outline",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/londrinaoutline/v8/lls08GOa1eT74p072l1AWJmp8DTZ6iHear7UV05iykg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Londrina Shadow",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/londrinashadow/v6/dNYuzPS_7eYgXFJBzMoKdbw6Z3rVA5KDSi7aQxS92Nk.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Londrina Sketch",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/londrinasketch/v6/p7Ai06aT1Ycp_D2fyE3z69d6z_uhFGnpCOifUY1fJQo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Londrina Solid",
           "category": "display",
           "variants": [
            "100",
            "300",
            "regular",
            "900"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/londrinasolid/v6/GNw2ckl4GiWuueFb9dMt4kBPCDJ-ayOoeeQPacAe1lc.ttf",
            "300": "http://fonts.gstatic.com/s/londrinasolid/v6/BDKo9ty0kfh66weuamkY1YGlXQxaR_emZVjFa6K5Gm8.ttf",
            "regular": "http://fonts.gstatic.com/s/londrinasolid/v6/yysorIEiYSBb0ylZjg791MR125CwGqh8XBqkBzea0LA.ttf",
            "900": "http://fonts.gstatic.com/s/londrinasolid/v6/BDKo9ty0kfh66weuamkY1cOBCLEQFAwATxcDa2xYLs8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lora",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v12",
           "lastModified": "2017-11-07",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lora/v12/aXJ7KVIGcejEy1abawZazg.ttf",
            "italic": "http://fonts.gstatic.com/s/lora/v12/AN2EZaj2tFRpyveuNn9BOg.ttf",
            "700": "http://fonts.gstatic.com/s/lora/v12/enKND5SfzQKkggBA_VnT1A.ttf",
            "700italic": "http://fonts.gstatic.com/s/lora/v12/ivs9j3kYU65pR9QD9YFdzQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Love Ya Like A Sister",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/loveyalikeasister/v8/LzkxWS-af0Br2Sk_YgSJY-ad1xEP8DQfgfY8MH9aBUg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Loved by the King",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lovedbytheking/v7/wg03xD4cWigj4YDufLBSr8io2AFEwwMpu7y5KyiyAJc.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lovers Quarrel",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/loversquarrel/v5/gipdZ8b7pKb89MzQLAtJHLHLxci2ElvNEmOB303HLk0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Luckiest Guy",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/luckiestguy/v8/5718gH8nDy3hFVihOpkY5C3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lusitana",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lusitana/v5/l1h9VDomkwbdzbPdmLcUIw.ttf",
            "700": "http://fonts.gstatic.com/s/lusitana/v5/GWtZyUsONxgkdl3Mc1P7FKCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Lustria",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/lustria/v5/gXAk0s4ai0X-TAOhYzZd1w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Macondo",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/macondo/v6/G6yPNUscRPQ8ufBXs_8yRQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Macondo Swash Caps",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/macondoswashcaps/v5/SsSR706z-MlvEH7_LS6JAPkkgYRHs6GSG949m-K6x2k.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mada",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "900"
           ],
           "subsets": [
            "latin",
            "arabic"
           ],
           "version": "v4",
           "lastModified": "2017-11-21",
           "files": {
            "200": "http://fonts.gstatic.com/s/mada/v4/sN1aPvvd07F1Sq3qcEQg4w.ttf",
            "300": "http://fonts.gstatic.com/s/mada/v4/P46fye2TPh4fVwALgHSXCA.ttf",
            "regular": "http://fonts.gstatic.com/s/mada/v4/io_zUrt5o943T_q45OHLWQ.ttf",
            "500": "http://fonts.gstatic.com/s/mada/v4/PhhDsBi34sP0LptbpS9m6w.ttf",
            "600": "http://fonts.gstatic.com/s/mada/v4/6zYBU-NFokCo3MIlPsWCUw.ttf",
            "700": "http://fonts.gstatic.com/s/mada/v4/VnwndFbEsjy4VcU_Dzedhg.ttf",
            "900": "http://fonts.gstatic.com/s/mada/v4/aCyc9Kc3rOJLL6fV9VfptA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Magra",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/magra/v5/hoZ13bwCXBxuGZqAudgc5A.ttf",
            "700": "http://fonts.gstatic.com/s/magra/v5/6fOM5sq5cIn8D0RjX8Lztw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Maiden Orange",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/maidenorange/v8/ZhKIA2SPisEwdhW7g0RUWojjx0o0jr6fNXxPgYh_a8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Maitree",
           "category": "serif",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "thai"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/maitree/v2/JTlrRs3bVPV4i05cUIx_z_esZW2xOQ-xsNqO47m55DA.ttf",
            "300": "http://fonts.gstatic.com/s/maitree/v2/rEGdABAOaqCHggl37mkWjfesZW2xOQ-xsNqO47m55DA.ttf",
            "regular": "http://fonts.gstatic.com/s/maitree/v2/SpKVJkAjDAYOr1VkdSRspA.ttf",
            "500": "http://fonts.gstatic.com/s/maitree/v2/2VHD7TXjRhN4Xu74SEPGdvesZW2xOQ-xsNqO47m55DA.ttf",
            "600": "http://fonts.gstatic.com/s/maitree/v2/uuazDnPwt30gW3cKsG-e0_esZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/maitree/v2/cnHhc9fphsL3q-pistN3IPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mako",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mako/v8/z5zSLmfPlv1uTVAdmJBLXg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mallanna",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mallanna/v5/krCTa-CfMbtxqF0689CbuQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mandali",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mandali/v5/0lF8yJ7fkyjXuqtSi5bWbQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Manuale",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/manuale/v2/OL9lzPXATGiZUB8Qdk3tiQ.ttf",
            "italic": "http://fonts.gstatic.com/s/manuale/v2/oRbwaLnv_NzztbUuhNLiBw.ttf",
            "500": "http://fonts.gstatic.com/s/manuale/v2/xsy0EZlufjk4A6mPfwX5mfesZW2xOQ-xsNqO47m55DA.ttf",
            "500italic": "http://fonts.gstatic.com/s/manuale/v2/r4TYrL7JhyPxpmVA-JAN0S3USBnSvpkopQaUR-2r7iU.ttf",
            "600": "http://fonts.gstatic.com/s/manuale/v2/gDxlyLYdCx7A4S8cf-Z8JvesZW2xOQ-xsNqO47m55DA.ttf",
            "600italic": "http://fonts.gstatic.com/s/manuale/v2/n25GBfdDLxRFJ-OYtzyorS3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/manuale/v2/ut2ZOkBP2LtTYOuh1fI83_esZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/manuale/v2/Lrka5WC7aKfhIA6uk-QS6y3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Marcellus",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/marcellus/v5/UjiLZzumxWC9whJ86UtaYw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Marcellus SC",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/marcellussc/v5/_jugwxhkkynrvsfrxVx8gS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Marck Script",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/marckscript/v8/O_D1NAZVOFOobLbVtW3bci3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Margarine",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/margarine/v6/DJnJwIrcO_cGkjSzY3MERw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Marko One",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/markoone/v7/hpP7j861sOAco43iDc4n4w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Marmelad",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/marmelad/v7/jI0_FBlSOIRLL0ePWOhOwQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Martel",
           "category": "serif",
           "variants": [
            "200",
            "300",
            "regular",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/martel/v2/_wfGdswZbat7P4tupHLA1w.ttf",
            "300": "http://fonts.gstatic.com/s/martel/v2/SghoV2F2VPdVU3P0a4fa9w.ttf",
            "regular": "http://fonts.gstatic.com/s/martel/v2/9ALu5czkaaf5zsYk6GJEnQ.ttf",
            "600": "http://fonts.gstatic.com/s/martel/v2/Kt9uPhH1PvUwuZ5Y6zuAMQ.ttf",
            "700": "http://fonts.gstatic.com/s/martel/v2/4OzIiKB5wE36xXL2U0vzWQ.ttf",
            "800": "http://fonts.gstatic.com/s/martel/v2/RVF8drcQoRkRL7l_ZkpTlQ.ttf",
            "900": "http://fonts.gstatic.com/s/martel/v2/iS0YUpFJoiLRlnyl40rpEA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Martel Sans",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/martelsans/v4/7ajme85aKKx_SCWF59ImQEnzyIngrzGjGh22wPb6cGM.ttf",
            "300": "http://fonts.gstatic.com/s/martelsans/v4/7ajme85aKKx_SCWF59ImQC9-WlPSxbfiI49GsXo3q0g.ttf",
            "regular": "http://fonts.gstatic.com/s/martelsans/v4/91c8DPDZncMc0RFfhmc2RqCWcynf_cDxXwCLxiixG1c.ttf",
            "600": "http://fonts.gstatic.com/s/martelsans/v4/7ajme85aKKx_SCWF59ImQJZ7xm-Bj30Bj2KNdXDzSZg.ttf",
            "700": "http://fonts.gstatic.com/s/martelsans/v4/7ajme85aKKx_SCWF59ImQHe1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "800": "http://fonts.gstatic.com/s/martelsans/v4/7ajme85aKKx_SCWF59ImQA89PwPrYLaRFJ-HNCU9NbA.ttf",
            "900": "http://fonts.gstatic.com/s/martelsans/v4/7ajme85aKKx_SCWF59ImQCenaqEuufTBk9XMKnKmgDA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Marvel",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/marvel/v7/Fg1dO8tWVb-MlyqhsbXEkg.ttf",
            "italic": "http://fonts.gstatic.com/s/marvel/v7/HzyjFB-oR5usrc7Lxz9g8w.ttf",
            "700": "http://fonts.gstatic.com/s/marvel/v7/WrHDBL1RupWGo2UcdgxB3Q.ttf",
            "700italic": "http://fonts.gstatic.com/s/marvel/v7/Gzf5NT09Y6xskdQRj2kz1qCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mate",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mate/v6/ooFviPcJ6hZP5bAE71Cawg.ttf",
            "italic": "http://fonts.gstatic.com/s/mate/v6/5XwW6_cbisGvCX5qmNiqfA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mate SC",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/matesc/v6/-YkIT2TZoPZF6pawKzDpWw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Maven Pro",
           "category": "sans-serif",
           "variants": [
            "regular",
            "500",
            "700",
            "900"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v11",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mavenpro/v11/sqPJIFG4gqsjl-0q_46Gbw.ttf",
            "500": "http://fonts.gstatic.com/s/mavenpro/v11/SQVfzoJBbj9t3aVcmbspRi3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/mavenpro/v11/uDssvmXgp7Nj3i336k_dSi3USBnSvpkopQaUR-2r7iU.ttf",
            "900": "http://fonts.gstatic.com/s/mavenpro/v11/-91TwiFzqeL1F7Kh91APwS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "McLaren",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mclaren/v5/OprvTGxaiINBKW_1_U0eoQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Meddon",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/meddon/v10/f8zJO98uu2EtSj9p7ci9RA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "MedievalSharp",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/medievalsharp/v9/85X_PjV6tftJ0-rX7KYQkOe45sJkivqprK7VkUlzfg0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Medula One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/medulaone/v7/AasPgDQak81dsTGQHc5zUPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Meera Inimai",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "tamil",
            "latin"
           ],
           "version": "v2",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/meerainimai/v2/fWbdJc2ZVZnWCi06NRCxDy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Megrim",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/megrim/v8/e-9jVUC9lv1zxaFQARuftw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Meie Script",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/meiescript/v5/oTIWE5MmPye-rCyVp_6KEqCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Merienda",
           "category": "handwriting",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/merienda/v5/MYY6Og1qZlOQtPW2G95Y3A.ttf",
            "700": "http://fonts.gstatic.com/s/merienda/v5/GlwcvRLlgiVE2MBFQ4r0sKCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Merienda One",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/meriendaone/v8/bCA-uDdUx6nTO8SjzCLXvS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Merriweather",
           "category": "serif",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "700",
            "700italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v19",
           "lastModified": "2017-11-07",
           "files": {
            "300": "http://fonts.gstatic.com/s/merriweather/v19/ZvcMqxEwPfh2qDWBPxn6nqcQoVhARpoaILP7amxE_8g.ttf",
            "300italic": "http://fonts.gstatic.com/s/merriweather/v19/EYh7Vl4ywhowqULgRdYwICna0FLWfcB-J_SAYmcAXaI.ttf",
            "regular": "http://fonts.gstatic.com/s/merriweather/v19/RFda8w1V0eDZheqfcyQ4EC3USBnSvpkopQaUR-2r7iU.ttf",
            "italic": "http://fonts.gstatic.com/s/merriweather/v19/So5lHxHT37p2SS4-t60SlPMZXuCXbOrAvx5R0IT5Oyo.ttf",
            "700": "http://fonts.gstatic.com/s/merriweather/v19/ZvcMqxEwPfh2qDWBPxn6nkD2ttfZwueP-QU272T9-k4.ttf",
            "700italic": "http://fonts.gstatic.com/s/merriweather/v19/EYh7Vl4ywhowqULgRdYwIPAs9-1nE9qOqhChW0m4nDE.ttf",
            "900": "http://fonts.gstatic.com/s/merriweather/v19/ZvcMqxEwPfh2qDWBPxn6nqObDOjC3UL77puoeHsE3fw.ttf",
            "900italic": "http://fonts.gstatic.com/s/merriweather/v19/EYh7Vl4ywhowqULgRdYwIBd0_s6jQr9r5s5OZYvtzBY.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Merriweather Sans",
           "category": "sans-serif",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "700",
            "700italic",
            "800",
            "800italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/merriweathersans/v9/6LmGj5dOJopQKEkt88Gowan5N8K-_DP0e9e_v51obXQ.ttf",
            "300italic": "http://fonts.gstatic.com/s/merriweathersans/v9/nAqt4hiqwq3tzCecpgPmVdytE4nGXk2hYD5nJ740tBw.ttf",
            "regular": "http://fonts.gstatic.com/s/merriweathersans/v9/AKu1CjQ4qnV8MUltkAX3sOAj_ty82iuwwDTNEYXGiyQ.ttf",
            "italic": "http://fonts.gstatic.com/s/merriweathersans/v9/3Mz4hOHzs2npRMG3B1ascZ32VBCoA_HLsn85tSWZmdo.ttf",
            "700": "http://fonts.gstatic.com/s/merriweathersans/v9/6LmGj5dOJopQKEkt88GowbqxG25nQNOioCZSK4sU-CA.ttf",
            "700italic": "http://fonts.gstatic.com/s/merriweathersans/v9/nAqt4hiqwq3tzCecpgPmVbuqAJxizi8Dk_SK5et7kMg.ttf",
            "800": "http://fonts.gstatic.com/s/merriweathersans/v9/6LmGj5dOJopQKEkt88GowYufzO2zUYSj5LqoJ3UGkco.ttf",
            "800italic": "http://fonts.gstatic.com/s/merriweathersans/v9/nAqt4hiqwq3tzCecpgPmVdDmPrYMy3aZO4LmnZsxTQw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Metal",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v10",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/metal/v10/zA3UOP13ooQcxjv04BZX5g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Metal Mania",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/metalmania/v7/isriV_rAUgj6bPWPN6l9QKCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Metamorphous",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/metamorphous/v7/wGqUKXRinIYggz-BTRU9ei3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Metrophobic",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/metrophobic/v10/SaglWZWCrrv_D17u1i4v_aCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Michroma",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/michroma/v8/0c2XrW81_QsiKV8T9thumA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Milonga",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/milonga/v5/dzNdIUSTGFmy2ahovDRcWg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Miltonian",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/miltonian/v11/Z4HrYZyqm0BnNNzcCUfzoQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Miltonian Tattoo",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v12",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/miltoniantattoo/v12/1oU_8OGYwW46eh02YHydn2uk0YtI6thZkz1Hmh-odwg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Miniver",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/miniver/v6/4yTQohOH_cWKRS5laRFhYg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Miriam Libre",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "hebrew",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/miriamlibre/v3/Ljtpu8zR5iJWmlN3Faba5S3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/miriamlibre/v3/FLc0J-Gdn8ynDWUkeeesAED2ttfZwueP-QU272T9-k4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mirza",
           "category": "display",
           "variants": [
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "arabic"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mirza/v3/8oe36Xbgj9BMSLJBaZ8VAQ.ttf",
            "500": "http://fonts.gstatic.com/s/mirza/v3/dT3HbZoBCx1xbU7PnFEFyQ.ttf",
            "600": "http://fonts.gstatic.com/s/mirza/v3/6T4uh2Zti9P6Eq_gbAYvVQ.ttf",
            "700": "http://fonts.gstatic.com/s/mirza/v3/b47CZDHoZdhnplmDpZymFw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Miss Fajardose",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/missfajardose/v7/WcXjlQPKn6nBfr8LY3ktNu6rPKfVZo7L2bERcf0BDns.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mitr",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "thai"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/mitr/v3/GCzZRAhweqJhxrmM0bPztg.ttf",
            "300": "http://fonts.gstatic.com/s/mitr/v3/A61rQ_y9i8Ja__oFN7KxiQ.ttf",
            "regular": "http://fonts.gstatic.com/s/mitr/v3/vKMd72X2iT4iBo5GvdCa_A.ttf",
            "500": "http://fonts.gstatic.com/s/mitr/v3/r_Z6yrJJ0zmkGAqxqjlLRg.ttf",
            "600": "http://fonts.gstatic.com/s/mitr/v3/42l66tb_XMxM97GKatU9Ng.ttf",
            "700": "http://fonts.gstatic.com/s/mitr/v3/V-V7Rul5HOZ651R4Tml2Lw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Modak",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/modak/v3/lMsN0QIKid-pCPvL0hH4nw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Modern Antiqua",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/modernantiqua/v7/8qX_tr6Xzy4t9fvZDXPkh6rFJ4O13IHVxZbM6yoslpo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mogra",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "gujarati",
            "latin-ext"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mogra/v4/gIxQBn9PseDaI0D4FnOiBQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Molengo",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/molengo/v8/jcjgeGuzv83I55AzOTpXNQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Molle",
           "category": "handwriting",
           "variants": [
            "italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-11-21",
           "files": {
            "italic": "http://fonts.gstatic.com/s/molle/v6/9XTdCsjPXifLqo5et-YoGA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Monda",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/monda/v7/qFMHZ9zvR6B_gnoIgosPrw.ttf",
            "700": "http://fonts.gstatic.com/s/monda/v7/EVOzZUyc_j1w2GuTgTAW1g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Monofett",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/monofett/v7/C6K5L799Rgxzg2brgOaqAw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Monoton",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/monoton/v7/aCz8ja_bE4dg-7agSvExdw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Monsieur La Doulaise",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/monsieurladoulaise/v6/IMAdMj6Eq9jZ46CPctFtMKP61oAqTJXlx5ZVOBmcPdM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Montaga",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/montaga/v5/PwTwUboiD-M4-mFjZfJs2A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Montez",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/montez/v8/kx58rLOWQQLGFM4pDHv5Ng.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Montserrat",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v12",
           "lastModified": "2017-11-07",
           "files": {
            "100": "http://fonts.gstatic.com/s/montserrat/v12/CdKWaRAal2Bxq9mORLKRRS3USBnSvpkopQaUR-2r7iU.ttf",
            "100italic": "http://fonts.gstatic.com/s/montserrat/v12/1809Y0aW9bpFOPXsQTFwf8SVQ0giZ-l_NELu3lgGyYw.ttf",
            "200": "http://fonts.gstatic.com/s/montserrat/v12/eWRmKHdPNWGn_iFyeEYja2eudeTO44zf-ht3k-KNzwg.ttf",
            "200italic": "http://fonts.gstatic.com/s/montserrat/v12/zhwB3-BAdyKDf0geWr9FtwQm5IkIgNCodAfQb4ovl18.ttf",
            "300": "http://fonts.gstatic.com/s/montserrat/v12/IVeH6A3MiFyaSEiudUMXE0eOrDcLawS7-ssYqLr2Xp4.ttf",
            "300italic": "http://fonts.gstatic.com/s/montserrat/v12/zhwB3-BAdyKDf0geWr9Ft6cQoVhARpoaILP7amxE_8g.ttf",
            "regular": "http://fonts.gstatic.com/s/montserrat/v12/Kqy6-utIpx_30Xzecmeo8_esZW2xOQ-xsNqO47m55DA.ttf",
            "italic": "http://fonts.gstatic.com/s/montserrat/v12/-iqwlckIhsmvkx0N6rwPmi3USBnSvpkopQaUR-2r7iU.ttf",
            "500": "http://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCwepp-63r6doWhTEbsfBIRJ7A.ttf",
            "500italic": "http://fonts.gstatic.com/s/montserrat/v12/zhwB3-BAdyKDf0geWr9Ft5MQuUSAwdHsY8ov_6tk1oA.ttf",
            "600": "http://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl0_pTEJqju4Hz1txDWij77d4.ttf",
            "600italic": "http://fonts.gstatic.com/s/montserrat/v12/zhwB3-BAdyKDf0geWr9Ft2v8CylhIUtwUiYO7Z2wXbE.ttf",
            "700": "http://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcgJKKGfqHaYFsRG-T3ceEVo.ttf",
            "700italic": "http://fonts.gstatic.com/s/montserrat/v12/zhwB3-BAdyKDf0geWr9Ft0D2ttfZwueP-QU272T9-k4.ttf",
            "800": "http://fonts.gstatic.com/s/montserrat/v12/H8_7oktkjVeeX06kbAvc0Kk3bhPBSBJ0bSJQ6acL-0g.ttf",
            "800italic": "http://fonts.gstatic.com/s/montserrat/v12/zhwB3-BAdyKDf0geWr9Ft_qsay_1ZmRGmC8pVRdIfAg.ttf",
            "900": "http://fonts.gstatic.com/s/montserrat/v12/aEu-9ATAroJ1iN4zmQ55Bp0EAVxt0G0biEntp43Qt6E.ttf",
            "900italic": "http://fonts.gstatic.com/s/montserrat/v12/zhwB3-BAdyKDf0geWr9Ft6ObDOjC3UL77puoeHsE3fw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Montserrat Alternates",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-11-07",
           "files": {
            "100": "http://fonts.gstatic.com/s/montserratalternates/v9/oqQkJ7FUCF9bJw9oNhwpltmjtuu7N1WAenNR-bns1HU.ttf",
            "100italic": "http://fonts.gstatic.com/s/montserratalternates/v9/3-rFIqHz_U7TAmWg7RcpLzob9T7De5a9EmE7cInrugI.ttf",
            "200": "http://fonts.gstatic.com/s/montserratalternates/v9/YENqOGAVzwIHjYNjmKuAZrWzJnWnTj1NV2WEtcqW8F0.ttf",
            "200italic": "http://fonts.gstatic.com/s/montserratalternates/v9/AXzeb8s80Wvg1Wkw1cVlATSYqyfLbk4Wyr4DDJHtpar3rGVtsTkPsbDajuO5ueQw.ttf",
            "300": "http://fonts.gstatic.com/s/montserratalternates/v9/YENqOGAVzwIHjYNjmKuAZoE9JAqK0NEjKMCIBssy61I.ttf",
            "300italic": "http://fonts.gstatic.com/s/montserratalternates/v9/AXzeb8s80Wvg1Wkw1cVlAX0Ksah31OxOJpZejHsaXyX3rGVtsTkPsbDajuO5ueQw.ttf",
            "regular": "http://fonts.gstatic.com/s/montserratalternates/v9/z2n1Sjxk9souK3HCtdHuklPuEVRGaG9GCQnmM16YWq0.ttf",
            "italic": "http://fonts.gstatic.com/s/montserratalternates/v9/oqQkJ7FUCF9bJw9oNhwpliKJhVBtn9MynHVBPiS2bkc.ttf",
            "500": "http://fonts.gstatic.com/s/montserratalternates/v9/YENqOGAVzwIHjYNjmKuAZkLT1bEhWimL9YDPt6og4ow.ttf",
            "500italic": "http://fonts.gstatic.com/s/montserratalternates/v9/AXzeb8s80Wvg1Wkw1cVlAbq1yxDcj1rkVNifBkzxbjz3rGVtsTkPsbDajuO5ueQw.ttf",
            "600": "http://fonts.gstatic.com/s/montserratalternates/v9/YENqOGAVzwIHjYNjmKuAZlzJBia8MVcXq42LmpYhWMY.ttf",
            "600italic": "http://fonts.gstatic.com/s/montserratalternates/v9/AXzeb8s80Wvg1Wkw1cVlAdzE96w6fJMDbKTKS-tt8C_3rGVtsTkPsbDajuO5ueQw.ttf",
            "700": "http://fonts.gstatic.com/s/montserratalternates/v9/YENqOGAVzwIHjYNjmKuAZpeqBKvsAhm-s2I4RVSXFfc.ttf",
            "700italic": "http://fonts.gstatic.com/s/montserratalternates/v9/AXzeb8s80Wvg1Wkw1cVlAVeYZ2vsofSkgKvS_YtoH2b3rGVtsTkPsbDajuO5ueQw.ttf",
            "800": "http://fonts.gstatic.com/s/montserratalternates/v9/YENqOGAVzwIHjYNjmKuAZkG2AOFTt9I0BIk1fL0aWvI.ttf",
            "800italic": "http://fonts.gstatic.com/s/montserratalternates/v9/AXzeb8s80Wvg1Wkw1cVlAbM_h-OHjcDf1XWbHqSgRF73rGVtsTkPsbDajuO5ueQw.ttf",
            "900": "http://fonts.gstatic.com/s/montserratalternates/v9/YENqOGAVzwIHjYNjmKuAZqjHT7NF_e7B-hWEBx2SqPI.ttf",
            "900italic": "http://fonts.gstatic.com/s/montserratalternates/v9/AXzeb8s80Wvg1Wkw1cVlAX18ggQg0KDcknRVFWguAv_3rGVtsTkPsbDajuO5ueQw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Montserrat Subrayada",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/montserratsubrayada/v5/nzoCWCz0e9c7Mr2Gl8bbgrJymm6ilkk9f0nDA_sC_qk.ttf",
            "700": "http://fonts.gstatic.com/s/montserratsubrayada/v5/wf-IKpsHcfm0C9uaz9IeGJvEcF1LWArDbGWgKZSH9go.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Moul",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v9",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/moul/v9/Kb0ALQnfyXawP1a_P_gpTQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Moulpali",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v10",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/moulpali/v10/diD74BprGhmVkJoerKmrKA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mountains of Christmas",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mountainsofchristmas/v10/dVGBFPwd6G44IWDbQtPew2Auds3jz1Fxb61CgfaGDr4.ttf",
            "700": "http://fonts.gstatic.com/s/mountainsofchristmas/v10/PymufKtHszoLrY0uiAYKNM9cPTbSBTrQyTa5TWAe3vE.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mouse Memoirs",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mousememoirs/v5/NBFaaJFux_j0AQbAsW3QeH8f0n03UdmQgF_CLvNR2vg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mr Bedfort",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mrbedfort/v6/81bGgHTRikLs_puEGshl7_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mr Dafoe",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mrdafoe/v6/s32Q1S6ZkT7EaX53mUirvQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mr De Haviland",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mrdehaviland/v6/fD8y4L6PJ4vqDk7z8Y8e27v4lrhng1lzu7-weKO6cw8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mrs Saint Delafield",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mrssaintdelafield/v5/vuWagfFT7bj9lFtZOFBwmjHMBelqWf3tJeGyts2SmKU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mrs Sheppards",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mrssheppards/v6/2WFsWMV3VUeCz6UVH7UjCn8f0n03UdmQgF_CLvNR2vg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mukta",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v5",
           "lastModified": "2017-11-21",
           "files": {
            "200": "http://fonts.gstatic.com/s/mukta/v5/tDVdzIQ8YtIPQkpeTPxaRw.ttf",
            "300": "http://fonts.gstatic.com/s/mukta/v5/XBYaFkW7WJ8kqXq2Yt41cw.ttf",
            "regular": "http://fonts.gstatic.com/s/mukta/v5/7dmf9fx1PuHBtLhSPnZzrQ.ttf",
            "500": "http://fonts.gstatic.com/s/mukta/v5/lQPvn1FqPa-GCFx-cAuBHg.ttf",
            "600": "http://fonts.gstatic.com/s/mukta/v5/NcubiFyhit9Cmsn9p9y9Xg.ttf",
            "700": "http://fonts.gstatic.com/s/mukta/v5/TZMKZcvgKiI-bWO9PoMI7w.ttf",
            "800": "http://fonts.gstatic.com/s/mukta/v5/QJVapEVpFpMfDYz2xuPBmQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mukta Mahee",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "gurmukhi",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-09",
           "files": {
            "200": "http://fonts.gstatic.com/s/muktamahee/v2/kolKnxd29wydc4yTvsM4p0nzyIngrzGjGh22wPb6cGM.ttf",
            "300": "http://fonts.gstatic.com/s/muktamahee/v2/kolKnxd29wydc4yTvsM4py9-WlPSxbfiI49GsXo3q0g.ttf",
            "regular": "http://fonts.gstatic.com/s/muktamahee/v2/aY_0-ayxlrgq21R8UWTI96CWcynf_cDxXwCLxiixG1c.ttf",
            "500": "http://fonts.gstatic.com/s/muktamahee/v2/kolKnxd29wydc4yTvsM4p8CNfqCYlB_eIx7H1TVXe60.ttf",
            "600": "http://fonts.gstatic.com/s/muktamahee/v2/kolKnxd29wydc4yTvsM4p5Z7xm-Bj30Bj2KNdXDzSZg.ttf",
            "700": "http://fonts.gstatic.com/s/muktamahee/v2/kolKnxd29wydc4yTvsM4p3e1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "800": "http://fonts.gstatic.com/s/muktamahee/v2/kolKnxd29wydc4yTvsM4pw89PwPrYLaRFJ-HNCU9NbA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mukta Malar",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800"
           ],
           "subsets": [
            "tamil",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "200": "http://fonts.gstatic.com/s/muktamalar/v3/1-N_tlWLJvzngraerf18eUnzyIngrzGjGh22wPb6cGM.ttf",
            "300": "http://fonts.gstatic.com/s/muktamalar/v3/1-N_tlWLJvzngraerf18eS9-WlPSxbfiI49GsXo3q0g.ttf",
            "regular": "http://fonts.gstatic.com/s/muktamalar/v3/xdx0fv5-ENz5PCzqiKyrqqCWcynf_cDxXwCLxiixG1c.ttf",
            "500": "http://fonts.gstatic.com/s/muktamalar/v3/1-N_tlWLJvzngraerf18ecCNfqCYlB_eIx7H1TVXe60.ttf",
            "600": "http://fonts.gstatic.com/s/muktamalar/v3/1-N_tlWLJvzngraerf18eZZ7xm-Bj30Bj2KNdXDzSZg.ttf",
            "700": "http://fonts.gstatic.com/s/muktamalar/v3/1-N_tlWLJvzngraerf18eXe1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "800": "http://fonts.gstatic.com/s/muktamalar/v3/1-N_tlWLJvzngraerf18eQ89PwPrYLaRFJ-HNCU9NbA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mukta Vaani",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "gujarati",
            "latin-ext"
           ],
           "version": "v4",
           "lastModified": "2017-11-21",
           "files": {
            "200": "http://fonts.gstatic.com/s/muktavaani/v4/X9qyC4rK_D9w1AvSv0mw_0nzyIngrzGjGh22wPb6cGM.ttf",
            "300": "http://fonts.gstatic.com/s/muktavaani/v4/X9qyC4rK_D9w1AvSv0mw_y9-WlPSxbfiI49GsXo3q0g.ttf",
            "regular": "http://fonts.gstatic.com/s/muktavaani/v4/knS0wTOFNOwOD4CZrdHIxKCWcynf_cDxXwCLxiixG1c.ttf",
            "500": "http://fonts.gstatic.com/s/muktavaani/v4/X9qyC4rK_D9w1AvSv0mw_8CNfqCYlB_eIx7H1TVXe60.ttf",
            "600": "http://fonts.gstatic.com/s/muktavaani/v4/X9qyC4rK_D9w1AvSv0mw_5Z7xm-Bj30Bj2KNdXDzSZg.ttf",
            "700": "http://fonts.gstatic.com/s/muktavaani/v4/X9qyC4rK_D9w1AvSv0mw_3e1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "800": "http://fonts.gstatic.com/s/muktavaani/v4/X9qyC4rK_D9w1AvSv0mw_w89PwPrYLaRFJ-HNCU9NbA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Muli",
           "category": "sans-serif",
           "variants": [
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-11",
           "files": {
            "200": "http://fonts.gstatic.com/s/muli/v11/59Vi0Dm-YSaaKxRiSKrm0w.ttf",
            "200italic": "http://fonts.gstatic.com/s/muli/v11/ZV7FMcmPA9u6IXfXrqyybA.ttf",
            "300": "http://fonts.gstatic.com/s/muli/v11/VJw4F3ZHRAZ7Hmg3nQu5YQ.ttf",
            "300italic": "http://fonts.gstatic.com/s/muli/v11/s-NKMCru8HiyjEt0ZDoBoA.ttf",
            "regular": "http://fonts.gstatic.com/s/muli/v11/KJiP6KznxbALQgfJcDdPAw.ttf",
            "italic": "http://fonts.gstatic.com/s/muli/v11/Cg0K_IWANs9xkNoxV7H1_w.ttf",
            "600": "http://fonts.gstatic.com/s/muli/v11/O4zVJyE-wzb2CQjcHkw-Xg.ttf",
            "600italic": "http://fonts.gstatic.com/s/muli/v11/xasdEbMzFtnmERn70-CN-A.ttf",
            "700": "http://fonts.gstatic.com/s/muli/v11/n0UfHdYd8jlanPB1sJ0WYQ.ttf",
            "700italic": "http://fonts.gstatic.com/s/muli/v11/9vQS_qOVbbe4j6LkPjCG1g.ttf",
            "800": "http://fonts.gstatic.com/s/muli/v11/QdHPibssQgzNly7JkF7wdw.ttf",
            "800italic": "http://fonts.gstatic.com/s/muli/v11/jbD7XyPvLT1oJBLbEcQmmg.ttf",
            "900": "http://fonts.gstatic.com/s/muli/v11/RcGfHFZUYLsFj9c3uAb4Gg.ttf",
            "900italic": "http://fonts.gstatic.com/s/muli/v11/r4hqeWwjqEvTncJsq5KCSg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Mystery Quest",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/mysteryquest/v5/467jJvg0c7HgucvBB9PLDyeUSrabuTpOsMEiRLtKwk0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "NTR",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ntr/v5/e7H4ZLtGfVOYyOupo6T12g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Neucha",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/neucha/v9/bijdhB-TzQdtpl0ykhGh4Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Neuton",
           "category": "serif",
           "variants": [
            "200",
            "300",
            "regular",
            "italic",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/neuton/v10/DA3Mkew3XqSkPpi1f4tJow.ttf",
            "300": "http://fonts.gstatic.com/s/neuton/v10/xrc_aZ2hx-gdeV0mlY8Vww.ttf",
            "regular": "http://fonts.gstatic.com/s/neuton/v10/9R-MGIOQUdjAVeB6nE6PcQ.ttf",
            "italic": "http://fonts.gstatic.com/s/neuton/v10/uVMT3JOB5BNFi3lgPp6kEg.ttf",
            "700": "http://fonts.gstatic.com/s/neuton/v10/gnWpkWY7DirkKiovncYrfg.ttf",
            "800": "http://fonts.gstatic.com/s/neuton/v10/XPzBQV4lY6enLxQG9cF1jw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "New Rocker",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/newrocker/v6/EFUWzHJedEkpW399zYOHofesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "News Cycle",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v14",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/newscycle/v14/xyMAr8VfiUzIOvS1abHJO_esZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/newscycle/v14/G28Ny31cr5orMqEQy6ljtwJKKGfqHaYFsRG-T3ceEVo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Niconne",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/niconne/v7/ZA-mFw2QNXodx5y7kfELBg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nixie One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/nixieone/v8/h6kQfmzm0Shdnp3eswRaqQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nobile",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/nobile/v9/lC_lPi1ddtN38iXTCRh6ow.ttf",
            "italic": "http://fonts.gstatic.com/s/nobile/v9/vGmrpKzWQQSrb-PR6FWBIA.ttf",
            "500": "http://fonts.gstatic.com/s/nobile/v9/el-1JDqzLC5ePMPiB2COqQ.ttf",
            "500italic": "http://fonts.gstatic.com/s/nobile/v9/y2A1jpvs_uHcnmIZDscDC6CWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/nobile/v9/9p6M-Yrg_r_QPmSD1skrOg.ttf",
            "700italic": "http://fonts.gstatic.com/s/nobile/v9/oQ1eYPaXV638N03KvsNvyKCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nokora",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/nokora/v11/dRyz1JfnyKPNaRcBNX9F9A.ttf",
            "700": "http://fonts.gstatic.com/s/nokora/v11/QMqqa4QEOhQpiig3cAPmbQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Norican",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/norican/v5/SHnSqhYAWG5sZTWcPzEHig.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nosifer",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/nosifer/v6/7eJGoIuHRrtcG00j6CptSA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nothing You Could Do",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/nothingyoucoulddo/v7/jpk1K3jbJoyoK0XKaSyQAf-TpkXjXYGWiJZAEtBRjPU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Noticia Text",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/noticiatext/v7/wdyV6x3eKpdeUPQ7BJ5uUC3USBnSvpkopQaUR-2r7iU.ttf",
            "italic": "http://fonts.gstatic.com/s/noticiatext/v7/dAuxVpkYE_Q_IwIm6elsKPMZXuCXbOrAvx5R0IT5Oyo.ttf",
            "700": "http://fonts.gstatic.com/s/noticiatext/v7/pEko-RqEtp45bE2P80AAKUD2ttfZwueP-QU272T9-k4.ttf",
            "700italic": "http://fonts.gstatic.com/s/noticiatext/v7/-rQ7V8ARjf28_b7kRa0JuvAs9-1nE9qOqhChW0m4nDE.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Noto Sans",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "devanagari",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-11",
           "files": {
            "regular": "http://fonts.gstatic.com/s/notosans/v7/0Ue9FiUJwVhi4NGfHJS5uA.ttf",
            "italic": "http://fonts.gstatic.com/s/notosans/v7/dLcNKMgJ1H5RVoZFraDz0qCWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/notosans/v7/PIbvSEyHEdL91QLOQRnZ1y3USBnSvpkopQaUR-2r7iU.ttf",
            "700italic": "http://fonts.gstatic.com/s/notosans/v7/9Z3uUWMRR7crzm1TjRicDne1Pd76Vl7zRpE7NLJQ7XU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Noto Serif",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v6",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/notoserif/v6/zW6mc7bC1CWw8dH0yxY8JfesZW2xOQ-xsNqO47m55DA.ttf",
            "italic": "http://fonts.gstatic.com/s/notoserif/v6/HQXBIwLHsOJCNEQeX9kNzy3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/notoserif/v6/lJAvZoKA5NttpPc9yc6lPQJKKGfqHaYFsRG-T3ceEVo.ttf",
            "700italic": "http://fonts.gstatic.com/s/notoserif/v6/Wreg0Be4tcFGM2t6VWytvED2ttfZwueP-QU272T9-k4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nova Cut",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/novacut/v9/6q12jWcBvj0KO2cMRP97tA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nova Flat",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/novaflat/v9/pK7a0CoGzI684qe_XSHBqQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nova Mono",
           "category": "monospace",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "greek"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/novamono/v8/6-SChr5ZIaaasJFBkgrLNw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nova Oval",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/novaoval/v9/VuukVpKP8BwUf8o9W5LYQQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nova Round",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/novaround/v9/7-cK3Ari_8XYYFgVMxVhDvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nova Script",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/novascript/v10/dEvxQDLgx1M1TKY-NmBWYaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nova Slim",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/novaslim/v9/rPYXC81_VL2EW-4CzBX65g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nova Square",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/novasquare/v9/BcBzXoaDzYX78rquGXVuSqCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Numans",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/numans/v7/g5snI2p6OEjjTNmTHyBdiQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nunito",
           "category": "sans-serif",
           "variants": [
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/nunito/v9/xtWPP_05UbsUNY9Kdgwt_w.ttf",
            "200italic": "http://fonts.gstatic.com/s/nunito/v9/EbyHzRpZ3jx6yC2BjZCsQqCWcynf_cDxXwCLxiixG1c.ttf",
            "300": "http://fonts.gstatic.com/s/nunito/v9/zXQvrWBJqUooM7Xv98MrQw.ttf",
            "300italic": "http://fonts.gstatic.com/s/nunito/v9/4BFBxBQCHZfUELdybShAwKCWcynf_cDxXwCLxiixG1c.ttf",
            "regular": "http://fonts.gstatic.com/s/nunito/v9/ySZTeT3IuzJj0GK6uGpbBg.ttf",
            "italic": "http://fonts.gstatic.com/s/nunito/v9/NZNWFpgsC6hUUE2c03CLoQ.ttf",
            "600": "http://fonts.gstatic.com/s/nunito/v9/B4-BGlpEzQ4WP-D3Zi0PRQ.ttf",
            "600italic": "http://fonts.gstatic.com/s/nunito/v9/7SyYp8NBEeMV4V7MAKJnZ6CWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/nunito/v9/aEdlqgMuYbpe4U3TnqOQMA.ttf",
            "700italic": "http://fonts.gstatic.com/s/nunito/v9/4cHctiCFYmTpv-a6b6vYsKCWcynf_cDxXwCLxiixG1c.ttf",
            "800": "http://fonts.gstatic.com/s/nunito/v9/GtGHSZwowZF8a9-GAsh20A.ttf",
            "800italic": "http://fonts.gstatic.com/s/nunito/v9/2TsLUs-EFIKsriUeVTl6nKCWcynf_cDxXwCLxiixG1c.ttf",
            "900": "http://fonts.gstatic.com/s/nunito/v9/QVvFcvcPoFKH9Q71V4WsjQ.ttf",
            "900italic": "http://fonts.gstatic.com/s/nunito/v9/cIxOb6Vw6BqF9ZoAlenp3qCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Nunito Sans",
           "category": "sans-serif",
           "variants": [
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/nunitosans/v3/XvilrNtBQKRMeiqSPzEFHUnzyIngrzGjGh22wPb6cGM.ttf",
            "200italic": "http://fonts.gstatic.com/s/nunitosans/v3/ORCQQ32ldzJ6bFTh_zXqV02YN_dW5g9CXH6iztHQiR4.ttf",
            "300": "http://fonts.gstatic.com/s/nunitosans/v3/XvilrNtBQKRMeiqSPzEFHS9-WlPSxbfiI49GsXo3q0g.ttf",
            "300italic": "http://fonts.gstatic.com/s/nunitosans/v3/ORCQQ32ldzJ6bFTh_zXqV2o9eWDfYYxG3A176Zl7aIg.ttf",
            "regular": "http://fonts.gstatic.com/s/nunitosans/v3/qDS9UelBO44ppiSawKNcIKCWcynf_cDxXwCLxiixG1c.ttf",
            "italic": "http://fonts.gstatic.com/s/nunitosans/v3/w9sy7IRyDFLWACdltghEwUeOrDcLawS7-ssYqLr2Xp4.ttf",
            "600": "http://fonts.gstatic.com/s/nunitosans/v3/XvilrNtBQKRMeiqSPzEFHZZ7xm-Bj30Bj2KNdXDzSZg.ttf",
            "600italic": "http://fonts.gstatic.com/s/nunitosans/v3/ORCQQ32ldzJ6bFTh_zXqV5e6We3S5L6hKLscKpOkmlo.ttf",
            "700": "http://fonts.gstatic.com/s/nunitosans/v3/XvilrNtBQKRMeiqSPzEFHXe1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "700italic": "http://fonts.gstatic.com/s/nunitosans/v3/ORCQQ32ldzJ6bFTh_zXqV8_zJjSACmk0BRPxQqhnNLU.ttf",
            "800": "http://fonts.gstatic.com/s/nunitosans/v3/XvilrNtBQKRMeiqSPzEFHQ89PwPrYLaRFJ-HNCU9NbA.ttf",
            "800italic": "http://fonts.gstatic.com/s/nunitosans/v3/ORCQQ32ldzJ6bFTh_zXqVyad_7rtf4IdDfsLVg-2OV4.ttf",
            "900": "http://fonts.gstatic.com/s/nunitosans/v3/XvilrNtBQKRMeiqSPzEFHSenaqEuufTBk9XMKnKmgDA.ttf",
            "900italic": "http://fonts.gstatic.com/s/nunitosans/v3/ORCQQ32ldzJ6bFTh_zXqV0_yTOUGsoC54csJe1b-IRw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Odor Mean Chey",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/odormeanchey/v9/GK3E7EjPoBkeZhYshGFo0eVKG8sq4NyGgdteJLvqLDs.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Offside",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/offside/v5/v0C913SB8wqQUvcu1faUqw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Old Standard TT",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/oldstandardtt/v9/n6RTCDcIPWSE8UNBa4k-DLcB5jyhm1VsHs65c3QNDr0.ttf",
            "italic": "http://fonts.gstatic.com/s/oldstandardtt/v9/QQT_AUSp4AV4dpJfIN7U5PWrQzeMtsHf8QsWQ2cZg3c.ttf",
            "700": "http://fonts.gstatic.com/s/oldstandardtt/v9/5Ywdce7XEbTSbxs__4X1_HJqbZqK7TdZ58X80Q_Lw8Y.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Oldenburg",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/oldenburg/v5/dqA_M_uoCVXZbCO-oKBTnQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Oleo Script",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/oleoscript/v6/21stZcmPyzbQVXtmGegyqKCWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/oleoscript/v6/hudNQFKFl98JdNnlo363fne1Pd76Vl7zRpE7NLJQ7XU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Oleo Script Swash Caps",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/oleoscriptswashcaps/v5/vdWhGqsBUAP-FF3NOYTe4iMF4kXAPemmyaDpMXQ31P0.ttf",
            "700": "http://fonts.gstatic.com/s/oleoscriptswashcaps/v5/HMO3ftxA9AU5floml9c755reFYaXZ4zuJXJ8fr8OO1g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Open Sans",
           "category": "sans-serif",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v15",
           "lastModified": "2017-10-11",
           "files": {
            "300": "http://fonts.gstatic.com/s/opensans/v15/DXI1ORHCpsQm3Vp6mXoaTS3USBnSvpkopQaUR-2r7iU.ttf",
            "300italic": "http://fonts.gstatic.com/s/opensans/v15/PRmiXeptR36kaC0GEAetxi9-WlPSxbfiI49GsXo3q0g.ttf",
            "regular": "http://fonts.gstatic.com/s/opensans/v15/IgZJs4-7SA1XX_edsoXWog.ttf",
            "italic": "http://fonts.gstatic.com/s/opensans/v15/O4NhV7_qs9r9seTo7fnsVKCWcynf_cDxXwCLxiixG1c.ttf",
            "600": "http://fonts.gstatic.com/s/opensans/v15/MTP_ySUJH_bn48VBG8sNSi3USBnSvpkopQaUR-2r7iU.ttf",
            "600italic": "http://fonts.gstatic.com/s/opensans/v15/PRmiXeptR36kaC0GEAetxpZ7xm-Bj30Bj2KNdXDzSZg.ttf",
            "700": "http://fonts.gstatic.com/s/opensans/v15/k3k702ZOKiLJc3WVjuplzC3USBnSvpkopQaUR-2r7iU.ttf",
            "700italic": "http://fonts.gstatic.com/s/opensans/v15/PRmiXeptR36kaC0GEAetxne1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "800": "http://fonts.gstatic.com/s/opensans/v15/EInbV5DfGHOiMmvb1Xr-hi3USBnSvpkopQaUR-2r7iU.ttf",
            "800italic": "http://fonts.gstatic.com/s/opensans/v15/PRmiXeptR36kaC0GEAetxg89PwPrYLaRFJ-HNCU9NbA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Open Sans Condensed",
           "category": "sans-serif",
           "variants": [
            "300",
            "300italic",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v12",
           "lastModified": "2017-10-11",
           "files": {
            "300": "http://fonts.gstatic.com/s/opensanscondensed/v12/gk5FxslNkTTHtojXrkp-xEMwSSh38KQVJx4ABtsZTnA.ttf",
            "300italic": "http://fonts.gstatic.com/s/opensanscondensed/v12/jIXlqT1WKafUSwj6s9AzV4_LkTZ_uhAwfmGJ084hlvM.ttf",
            "700": "http://fonts.gstatic.com/s/opensanscondensed/v12/gk5FxslNkTTHtojXrkp-xBEM87DM3yorPOrvA-vB930.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Oranienbaum",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/oranienbaum/v6/M98jYwCSn0PaFhXXgviCoaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Orbitron",
           "category": "sans-serif",
           "variants": [
            "regular",
            "500",
            "700",
            "900"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/orbitron/v9/DY8swouAZjR3RaUPRf0HDQ.ttf",
            "500": "http://fonts.gstatic.com/s/orbitron/v9/p-y_ffzMdo5JN_7ia0vYEqCWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/orbitron/v9/PS9_6SLkY1Y6OgPO3APr6qCWcynf_cDxXwCLxiixG1c.ttf",
            "900": "http://fonts.gstatic.com/s/orbitron/v9/2I3-8i9hT294TE_pyjy9SaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Oregano",
           "category": "display",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/oregano/v5/UiLhqNixVv2EpjRoBG6axA.ttf",
            "italic": "http://fonts.gstatic.com/s/oregano/v5/_iwqGEht6XsAuEaCbYG64Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Orienta",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/orienta/v5/_NKSk93mMs0xsqtfjCsB3Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Original Surfer",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/originalsurfer/v6/gdHw6HpSIN4D6Xt7pi1-qIkEz33TDwAZczo_6fY7eg0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Oswald",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v16",
           "lastModified": "2017-11-21",
           "files": {
            "200": "http://fonts.gstatic.com/s/oswald/v16/NFBt4e1rewQyDPftazXlBw.ttf",
            "300": "http://fonts.gstatic.com/s/oswald/v16/y3tZpCdiRD4oNRRYFcAR5Q.ttf",
            "regular": "http://fonts.gstatic.com/s/oswald/v16/uLEd2g2vJglLPfsBF91DCg.ttf",
            "500": "http://fonts.gstatic.com/s/oswald/v16/wrHWShuZ7ELtrnx0cnkzXw.ttf",
            "600": "http://fonts.gstatic.com/s/oswald/v16/JNlamLn5ALW8eKp46JLlQA.ttf",
            "700": "http://fonts.gstatic.com/s/oswald/v16/7wj8ldV_5Ti37rHa0m1DDw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Over the Rainbow",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/overtherainbow/v8/6gp-gkpI2kie2dHQQLM2jQBdxkZd83xOSx-PAQ2QmiI.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Overlock",
           "category": "display",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/overlock/v7/Z8oYsGi88-E1cUB8YBFMAg.ttf",
            "italic": "http://fonts.gstatic.com/s/overlock/v7/rq6EacukHROOBrFrK_zF6_esZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/overlock/v7/Fexr8SqXM8Bm_gEVUA7AKaCWcynf_cDxXwCLxiixG1c.ttf",
            "700italic": "http://fonts.gstatic.com/s/overlock/v7/wFWnYgeXKYBks6gEUwYnfAJKKGfqHaYFsRG-T3ceEVo.ttf",
            "900": "http://fonts.gstatic.com/s/overlock/v7/YPJCVTT8ZbG3899l_-KIGqCWcynf_cDxXwCLxiixG1c.ttf",
            "900italic": "http://fonts.gstatic.com/s/overlock/v7/iOZhxT2zlg7W5ij_lb-oDp0EAVxt0G0biEntp43Qt6E.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Overlock SC",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/overlocksc/v6/8D7HYDsvS_g1GhBnlHzgzaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Overpass",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/overpass/v2/ywiUWFAguOSxQn0FFeOdWPesZW2xOQ-xsNqO47m55DA.ttf",
            "100italic": "http://fonts.gstatic.com/s/overpass/v2/thg-CA5nD5lyYWLwXbqXXi3USBnSvpkopQaUR-2r7iU.ttf",
            "200": "http://fonts.gstatic.com/s/overpass/v2/WrbWRQuVnXt_EslNm2vBt6CWcynf_cDxXwCLxiixG1c.ttf",
            "200italic": "http://fonts.gstatic.com/s/overpass/v2/Eyj9nfhrJ71MmfPNEwqE02eudeTO44zf-ht3k-KNzwg.ttf",
            "300": "http://fonts.gstatic.com/s/overpass/v2/nqDUqkXaOp0r1j0uaM5VUaCWcynf_cDxXwCLxiixG1c.ttf",
            "300italic": "http://fonts.gstatic.com/s/overpass/v2/R77XtXNe7WC4SXZBLWmy80eOrDcLawS7-ssYqLr2Xp4.ttf",
            "regular": "http://fonts.gstatic.com/s/overpass/v2/1fNed5evrqtu4ZjkbTnCRw.ttf",
            "italic": "http://fonts.gstatic.com/s/overpass/v2/lG-Dpm66OH9lPHbYTnITSvesZW2xOQ-xsNqO47m55DA.ttf",
            "600": "http://fonts.gstatic.com/s/overpass/v2/-GUou309ST_HAHIhkHjkz6CWcynf_cDxXwCLxiixG1c.ttf",
            "600italic": "http://fonts.gstatic.com/s/overpass/v2/aPYi-s_WVz-zuU4TsgAEjvpTEJqju4Hz1txDWij77d4.ttf",
            "700": "http://fonts.gstatic.com/s/overpass/v2/sBTg-F6_A1NQLJPfW5I7Q6CWcynf_cDxXwCLxiixG1c.ttf",
            "700italic": "http://fonts.gstatic.com/s/overpass/v2/E5UsN4VY1e_Twk_bY6TpQAJKKGfqHaYFsRG-T3ceEVo.ttf",
            "800": "http://fonts.gstatic.com/s/overpass/v2/YeZIq305iGwGCyZbaiEbVqCWcynf_cDxXwCLxiixG1c.ttf",
            "800italic": "http://fonts.gstatic.com/s/overpass/v2/j6xjlCEDoKw-D0Co-88A9Kk3bhPBSBJ0bSJQ6acL-0g.ttf",
            "900": "http://fonts.gstatic.com/s/overpass/v2/4lJ8BLdIYI_B9rFwoB4zO6CWcynf_cDxXwCLxiixG1c.ttf",
            "900italic": "http://fonts.gstatic.com/s/overpass/v2/SegM1mSQIRZG2pJwM_2Nm50EAVxt0G0biEntp43Qt6E.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Overpass Mono",
           "category": "monospace",
           "variants": [
            "300",
            "regular",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-09",
           "files": {
            "300": "http://fonts.gstatic.com/s/overpassmono/v3/JEQ6tXkANEo2u0wZ-MTOPEW1P7_iUBn_wmH5B9p-CEw.ttf",
            "regular": "http://fonts.gstatic.com/s/overpassmono/v3/MarHoIqW2hy_po97b_wS9uV_5zh5b-_HiooIRUBwn1A.ttf",
            "600": "http://fonts.gstatic.com/s/overpassmono/v3/JEQ6tXkANEo2u0wZ-MTOPCvU6mrnWf1MVbTZ5LZwmOY.ttf",
            "700": "http://fonts.gstatic.com/s/overpassmono/v3/JEQ6tXkANEo2u0wZ-MTOPO-Cz_5MeePnXDAcLNWyBME.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ovo",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ovo/v8/mFg27dimu3s9t09qjCwB1g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Oxygen",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/oxygen/v7/lZ31r0bR1Bzt_DfGZu1S8A.ttf",
            "regular": "http://fonts.gstatic.com/s/oxygen/v7/uhoyAE7XlQL22abzQieHjw.ttf",
            "700": "http://fonts.gstatic.com/s/oxygen/v7/yLqkmDwuNtt5pSqsJmhyrg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Oxygen Mono",
           "category": "monospace",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/oxygenmono/v5/DigTu7k4b7OmM8ubt1Qza6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "PT Mono",
           "category": "monospace",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ptmono/v5/QUbM8H9yJK5NhpQ0REO6Wg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "PT Sans",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-11",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ptsans/v9/UFoEz2uiuMypUGZL1NKoeg.ttf",
            "italic": "http://fonts.gstatic.com/s/ptsans/v9/yls9EYWOd496wiu7qzfgNg.ttf",
            "700": "http://fonts.gstatic.com/s/ptsans/v9/F51BEgHuR0tYHxF0bD4vwvesZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/ptsans/v9/lILlYDvubYemzYzN7GbLkC3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "PT Sans Caption",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ptsanscaption/v10/OXYTDOzBcXU8MTNBvBHeSW8by34Z3mUMtM-o4y-SHCY.ttf",
            "700": "http://fonts.gstatic.com/s/ptsanscaption/v10/Q-gJrFokeE7JydPpxASt25tc0eyfI4QDEsobEEpk_hA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "PT Sans Narrow",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-11",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ptsansnarrow/v8/UyYrYy3ltEffJV9QueSi4ZTvAuddT2xDMbdz0mdLyZY.ttf",
            "700": "http://fonts.gstatic.com/s/ptsansnarrow/v8/Q_pTky3Sc3ubRibGToTAYsLtdzs3iyjn_YuT226ZsLU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "PT Serif",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-11",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ptserif/v9/sAo427rn3-QL9sWCbMZXhA.ttf",
            "italic": "http://fonts.gstatic.com/s/ptserif/v9/9khWhKzhpkH0OkNnBKS3n_esZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/ptserif/v9/kyZw18tqQ5if-_wpmxxOeKCWcynf_cDxXwCLxiixG1c.ttf",
            "700italic": "http://fonts.gstatic.com/s/ptserif/v9/Foydq9xJp--nfYIx2TBz9QJKKGfqHaYFsRG-T3ceEVo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "PT Serif Caption",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ptserifcaption/v9/7xkFOeTxxO1GMC1suOUYWVsRioCqs5fohhaYel24W3k.ttf",
            "italic": "http://fonts.gstatic.com/s/ptserifcaption/v9/0kfPsmrmTSgiec7u_Wa0DB1mqvzPHelJwRcF_s_EUM0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Pacifico",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v12",
           "lastModified": "2017-11-07",
           "files": {
            "regular": "http://fonts.gstatic.com/s/pacifico/v12/GIrpeRY1r5CzbfL8r182lw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Padauk",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "myanmar"
           ],
           "version": "v4",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/padauk/v4/WdTk6igBu-qn4v8naF9hGQ.ttf",
            "700": "http://fonts.gstatic.com/s/padauk/v4/XUBO5k0emPIVnqCcQCcEpg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Palanquin",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/palanquin/v3/Hu0eGDVGK_g4saUFu6AK3KCWcynf_cDxXwCLxiixG1c.ttf",
            "200": "http://fonts.gstatic.com/s/palanquin/v3/pqXYXD7-VI5ezTjeqQOcyC3USBnSvpkopQaUR-2r7iU.ttf",
            "300": "http://fonts.gstatic.com/s/palanquin/v3/c0-J5OCAagpFCKkKraz-Ey3USBnSvpkopQaUR-2r7iU.ttf",
            "regular": "http://fonts.gstatic.com/s/palanquin/v3/xCwBUoAEV0kzCDwerAZ0Aw.ttf",
            "500": "http://fonts.gstatic.com/s/palanquin/v3/wLvvkEcZMKy95afLWh2EfC3USBnSvpkopQaUR-2r7iU.ttf",
            "600": "http://fonts.gstatic.com/s/palanquin/v3/405UIAv95_yZkCECrH6y-i3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/palanquin/v3/-UtkePo3NFvxEN3rGCtTvi3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Palanquin Dark",
           "category": "sans-serif",
           "variants": [
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/palanquindark/v3/PamTqrrgbBh_M3702w39rOfChn3JSg5yz_Q_xmrKQN0.ttf",
            "500": "http://fonts.gstatic.com/s/palanquindark/v3/iXyBGf5UbFUu6BG8hOY-maMZTo-EwKMRQt3RWHocLi0.ttf",
            "600": "http://fonts.gstatic.com/s/palanquindark/v3/iXyBGf5UbFUu6BG8hOY-mVNxaunw8i4Gywrk2SigRnk.ttf",
            "700": "http://fonts.gstatic.com/s/palanquindark/v3/iXyBGf5UbFUu6BG8hOY-mWToair6W0TEE44XrlfKbiM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Pangolin",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/pangolin/v3/i2W796ne6lveehHXs8AFGA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Paprika",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/paprika/v5/b-VpyoRSieBdB5BPJVF8HQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Parisienne",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/parisienne/v5/TW74B5QISJNx9moxGlmJfvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Passero One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/passeroone/v9/Yc-7nH5deCCv9Ed0MMnAQqCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Passion One",
           "category": "display",
           "variants": [
            "regular",
            "700",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/passionone/v8/1UIK1tg3bKJ4J3o35M4heqCWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/passionone/v8/feOcYDy2R-f3Ysy72PYJ2ne1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "900": "http://fonts.gstatic.com/s/passionone/v8/feOcYDy2R-f3Ysy72PYJ2ienaqEuufTBk9XMKnKmgDA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Pathway Gothic One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/pathwaygothicone/v6/Lqv9ztoTUV8Q0FmQZzPqaA6A6xIYD7vYcYDop1i-K-c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Patrick Hand",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/patrickhand/v11/9BG3JJgt_HlF3NpEUehL0C3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Patrick Hand SC",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/patrickhandsc/v5/OYFWCgfCR-7uHIovjUZXsbAgSRh1LpJXlLfl8IbsmHg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Pattaya",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "thai"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/pattaya/v2/sJEout1xdD7J8H-1H81pIQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Patua One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/patuaone/v7/njZwotTYjswR4qdhsW-kJw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Pavanam",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "tamil",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/pavanam/v2/C7yuEhNK5oftNLSL3I0bGw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Paytone One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/paytoneone/v10/3WCxC7JAJjQHQVoIE0ZwvqCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Peddana",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v5",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/peddana/v5/zaSZuj_GhmC8AOTugOROnA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Peralta",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/peralta/v5/cTJX5KEuc0GKRU9NXSm-8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Permanent Marker",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/permanentmarker/v7/9vYsg5VgPHKK8SXYbf3sMol14xj5tdg9OHF8w4E7StQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Petit Formal Script",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/petitformalscript/v5/OEZwr2-ovBsq2n3ACCKoEvVPl2Gjtxj0D6F7QLy1VQc.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Petrona",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/petrona/v6/nnQwxlP6dhrGovYEFtemTg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Philosopher",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/philosopher/v9/oZLTrB9jmJsyV0u_T0TKEaCWcynf_cDxXwCLxiixG1c.ttf",
            "italic": "http://fonts.gstatic.com/s/philosopher/v9/_9Hnc_gz9k7Qq6uKaeHKmUeOrDcLawS7-ssYqLr2Xp4.ttf",
            "700": "http://fonts.gstatic.com/s/philosopher/v9/napvkewXG9Gqby5vwGHICHe1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "700italic": "http://fonts.gstatic.com/s/philosopher/v9/PuKlryTcvTj7-qZWfLCFIM_zJjSACmk0BRPxQqhnNLU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Piedra",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/piedra/v6/owf-AvEEyAj9LJ2tVZ_3Mw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Pinyon Script",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/pinyonscript/v7/TzghnhfCn7TuE73f-CBQ0CeUSrabuTpOsMEiRLtKwk0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Pirata One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/pirataone/v5/WnbD86B4vB2ckYcL7oxuhvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Plaster",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/plaster/v9/O4QG9Z5116CXyfJdR9zxLw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Play",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/play/v9/GWvfObW8LhtsOX333MCpBg.ttf",
            "700": "http://fonts.gstatic.com/s/play/v9/crPhg6I0alLI-MpB3vW-zw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Playball",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/playball/v7/3hOFiQm_EUzycTpcN9uz4w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Playfair Display",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v13",
           "lastModified": "2017-11-07",
           "files": {
            "regular": "http://fonts.gstatic.com/s/playfairdisplay/v13/2NBgzUtEeyB-Xtpr9bm1CV6uyC_qD11hrFQ6EGgTJWI.ttf",
            "italic": "http://fonts.gstatic.com/s/playfairdisplay/v13/9MkijrV-dEJ0-_NWV7E6NzMsbnvDNEBX25F5HWk9AhI.ttf",
            "700": "http://fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgICsv6SrURqJprbhH_C1Mw8w.ttf",
            "700italic": "http://fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDECsYW3XoOVcYyYdp9NzzS9E.ttf",
            "900": "http://fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIKqwMe2wjvZrAR44M0BJZ48.ttf",
            "900italic": "http://fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEC0JfJ4xmm7j1kL6D7mPxrA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Playfair Display SC",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-11-07",
           "files": {
            "regular": "http://fonts.gstatic.com/s/playfairdisplaysc/v7/G0-tvBxd4eQRdwFKB8dRkcpjYTDWIvcAwAccqeW9uNM.ttf",
            "italic": "http://fonts.gstatic.com/s/playfairdisplaysc/v7/myuYiFR-4NTrUT4w6TKls2klJsJYggW8rlNoTOTuau0.ttf",
            "700": "http://fonts.gstatic.com/s/playfairdisplaysc/v7/5ggqGkvWJU_TtW2W8cEubA-Amcyomnuy4WsCiPxGHjw.ttf",
            "700italic": "http://fonts.gstatic.com/s/playfairdisplaysc/v7/6X0OQrQhEEnPo56RalREX4krgPi80XvBcbTwmz-rgmU.ttf",
            "900": "http://fonts.gstatic.com/s/playfairdisplaysc/v7/5ggqGkvWJU_TtW2W8cEubKXL3C32k275YmX_AcBPZ7w.ttf",
            "900italic": "http://fonts.gstatic.com/s/playfairdisplaysc/v7/6X0OQrQhEEnPo56RalREX8Zag2q3ssKz8uH1RU4a9gs.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Podkova",
           "category": "serif",
           "variants": [
            "regular",
            "500",
            "600",
            "700",
            "800"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/podkova/v11/eylljyGVfB8ZUQjYY3WZRQ.ttf",
            "500": "http://fonts.gstatic.com/s/podkova/v11/8MkhKmKhl0HgqBeKkV0pmvesZW2xOQ-xsNqO47m55DA.ttf",
            "600": "http://fonts.gstatic.com/s/podkova/v11/921xSzgq6uUBjPZXn2IH0PesZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/podkova/v11/SqW4aa8m_KVrOgYSydQ33vesZW2xOQ-xsNqO47m55DA.ttf",
            "800": "http://fonts.gstatic.com/s/podkova/v11/ObfRYfRr58NtktZuAa1VhfesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Poiret One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/poiretone/v5/dWcYed048E5gHGDIt8i1CPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Poller One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/pollerone/v7/dkctmDlTPcZ6boC8662RA_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Poly",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/poly/v8/bcMAuiacS2qkd54BcwW6_Q.ttf",
            "italic": "http://fonts.gstatic.com/s/poly/v8/Zkx-eIlZSjKUrPGYhV5PeA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Pompiere",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/pompiere/v7/o_va2p9CD5JfmFohAkGZIA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Pontano Sans",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/pontanosans/v5/gTHiwyxi6S7iiHpqAoiE3C3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Poppins",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v5",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/poppins/v5/J_Uo-RBVJYTcfQfJqaBpiA.ttf",
            "100italic": "http://fonts.gstatic.com/s/poppins/v5/AgVJ3FHPsWMHPMmRYdKWQKCWcynf_cDxXwCLxiixG1c.ttf",
            "200": "http://fonts.gstatic.com/s/poppins/v5/iG8N2M28abs14mWAmy9C8vesZW2xOQ-xsNqO47m55DA.ttf",
            "200italic": "http://fonts.gstatic.com/s/poppins/v5/-GlaWpWcSgdVagNuOGuFKS3USBnSvpkopQaUR-2r7iU.ttf",
            "300": "http://fonts.gstatic.com/s/poppins/v5/VIeViZ2fPtYBt3B2fQZplvesZW2xOQ-xsNqO47m55DA.ttf",
            "300italic": "http://fonts.gstatic.com/s/poppins/v5/QmRKoWaGfh304P2oApdMLS3USBnSvpkopQaUR-2r7iU.ttf",
            "regular": "http://fonts.gstatic.com/s/poppins/v5/hlvAxH6aIdOjWlLzgm0jqg.ttf",
            "italic": "http://fonts.gstatic.com/s/poppins/v5/3cZiAJEeIIIKVRjGXr9qVg.ttf",
            "500": "http://fonts.gstatic.com/s/poppins/v5/4WGKlFyjcmCFVl8pRsgZ9vesZW2xOQ-xsNqO47m55DA.ttf",
            "500italic": "http://fonts.gstatic.com/s/poppins/v5/ZswPVmYNMYXIwQy7Wnzcyi3USBnSvpkopQaUR-2r7iU.ttf",
            "600": "http://fonts.gstatic.com/s/poppins/v5/-zOABrCWORC3lyDh-ajNnPesZW2xOQ-xsNqO47m55DA.ttf",
            "600italic": "http://fonts.gstatic.com/s/poppins/v5/RbebACOccNN-5ixkDIVLjS3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/poppins/v5/8JitanEsk5aDh7mDYs-fYfesZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/poppins/v5/c4FPK8_hIFKoX59qcGwdCi3USBnSvpkopQaUR-2r7iU.ttf",
            "800": "http://fonts.gstatic.com/s/poppins/v5/vVhctzCFjekFM26ZXVvlAvesZW2xOQ-xsNqO47m55DA.ttf",
            "800italic": "http://fonts.gstatic.com/s/poppins/v5/nhuxdF7XMkIXmkGDadS6EC3USBnSvpkopQaUR-2r7iU.ttf",
            "900": "http://fonts.gstatic.com/s/poppins/v5/7WUVvX7AIKpgWf6w-guTPfesZW2xOQ-xsNqO47m55DA.ttf",
            "900italic": "http://fonts.gstatic.com/s/poppins/v5/Lmn8WRFdDq3MeV9dyKOb_y3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Port Lligat Sans",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/portlligatsans/v6/CUEdhRk7oC7up0p6t0g4P6mASEpx5X0ZpsuJOuvfOGA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Port Lligat Slab",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/portlligatslab/v6/CUEdhRk7oC7up0p6t0g4PxLSPACXvawUYCBEnHsOe30.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Pragati Narrow",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/pragatinarrow/v3/HzG2TfC862qPNsZsV_djPpTvAuddT2xDMbdz0mdLyZY.ttf",
            "700": "http://fonts.gstatic.com/s/pragatinarrow/v3/DnSI1zRkc0CY-hI5SC3q3MLtdzs3iyjn_YuT226ZsLU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Prata",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "cyrillic-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/prata/v8/3gmx8r842loRRm9iQkCDGg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Preahvihear",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v9",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/preahvihear/v9/82tDI-xTc53CxxOzEG4hDaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Press Start 2P",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/pressstart2p/v6/8Lg6LX8-ntOHUQnvQ0E7o1jfl3W46Sz5gOkEVhcFWF4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Pridi",
           "category": "serif",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "thai"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/pridi/v3/WvKJ-kflGuELyK4uQzpYIA.ttf",
            "300": "http://fonts.gstatic.com/s/pridi/v3/Ihwk-OGVFS69PINILdqAjQ.ttf",
            "regular": "http://fonts.gstatic.com/s/pridi/v3/Mau018Ghi7LJX7FkGYCZAQ.ttf",
            "500": "http://fonts.gstatic.com/s/pridi/v3/dPNOrMxU-HjLo-fvkFydsQ.ttf",
            "600": "http://fonts.gstatic.com/s/pridi/v3/J0i5OZxX07KC4mby5RjNbg.ttf",
            "700": "http://fonts.gstatic.com/s/pridi/v3/UhCy4jDDJttTB8k8rtWadg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Princess Sofia",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/princesssofia/v5/8g5l8r9BM0t1QsXLTajDe-wjmA7ie-lFcByzHGRhCIg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Prociono",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/prociono/v7/43ZYDHWogdFeNBWTl6ksmw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Prompt",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "thai"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/prompt/v2/ltjX-trOmfS-yKy_awt70g.ttf",
            "100italic": "http://fonts.gstatic.com/s/prompt/v2/KvTeArBpVb-tA2mahV6Jk_esZW2xOQ-xsNqO47m55DA.ttf",
            "200": "http://fonts.gstatic.com/s/prompt/v2/MNB_CVkbfYHFMWX_UbDC2Q.ttf",
            "200italic": "http://fonts.gstatic.com/s/prompt/v2/NR0JuXzzCDKpLNVhfyEAiaCWcynf_cDxXwCLxiixG1c.ttf",
            "300": "http://fonts.gstatic.com/s/prompt/v2/LzifakiWysr3N3OoAdbdpg.ttf",
            "300italic": "http://fonts.gstatic.com/s/prompt/v2/ir8BhbeDHM-qnbo-tnpmt6CWcynf_cDxXwCLxiixG1c.ttf",
            "regular": "http://fonts.gstatic.com/s/prompt/v2/nDo1rQFnTFNua4cp-OnD2A.ttf",
            "italic": "http://fonts.gstatic.com/s/prompt/v2/ZD4khIP924SU2fRYOJkraQ.ttf",
            "500": "http://fonts.gstatic.com/s/prompt/v2/w31OY1otplAgr5iZ21K7Fg.ttf",
            "500italic": "http://fonts.gstatic.com/s/prompt/v2/dfaeaRx00u9arVHsaDjliaCWcynf_cDxXwCLxiixG1c.ttf",
            "600": "http://fonts.gstatic.com/s/prompt/v2/uUrJjg1BGaIb6CAOlUIp9g.ttf",
            "600italic": "http://fonts.gstatic.com/s/prompt/v2/CJUBMsoNNHMMdFRxm-n7p6CWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/prompt/v2/HdM_epiStzshOr-49ubVyg.ttf",
            "700italic": "http://fonts.gstatic.com/s/prompt/v2/GtXRH7QWy3aLCHoJuR5WIKCWcynf_cDxXwCLxiixG1c.ttf",
            "800": "http://fonts.gstatic.com/s/prompt/v2/GF9cOamDd7mYPHNW1nZLKg.ttf",
            "800italic": "http://fonts.gstatic.com/s/prompt/v2/kBLgnnEB-VXkOLFCc0pzwqCWcynf_cDxXwCLxiixG1c.ttf",
            "900": "http://fonts.gstatic.com/s/prompt/v2/KFgmbwHbRBQb28VFhH3c8Q.ttf",
            "900italic": "http://fonts.gstatic.com/s/prompt/v2/qjrOe-lEPwDDeUu5g6q_DaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Prosto One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/prostoone/v6/bsqnAElAqk9kX7eABTRFJPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Proza Libre",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/prozalibre/v2/Hg11OrfE1P_U6mKmrZPknKCWcynf_cDxXwCLxiixG1c.ttf",
            "italic": "http://fonts.gstatic.com/s/prozalibre/v2/ClQTew5IUT7yKo8vyspLxEeOrDcLawS7-ssYqLr2Xp4.ttf",
            "500": "http://fonts.gstatic.com/s/prozalibre/v2/4gjxWDPA6RMWrIls_qgQBsCNfqCYlB_eIx7H1TVXe60.ttf",
            "500italic": "http://fonts.gstatic.com/s/prozalibre/v2/rWq3Qp4ZlPGKduc1qkgLHGnWRcJAYo5PSCx8UfGMHCI.ttf",
            "600": "http://fonts.gstatic.com/s/prozalibre/v2/4gjxWDPA6RMWrIls_qgQBpZ7xm-Bj30Bj2KNdXDzSZg.ttf",
            "600italic": "http://fonts.gstatic.com/s/prozalibre/v2/rWq3Qp4ZlPGKduc1qkgLHJe6We3S5L6hKLscKpOkmlo.ttf",
            "700": "http://fonts.gstatic.com/s/prozalibre/v2/4gjxWDPA6RMWrIls_qgQBne1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "700italic": "http://fonts.gstatic.com/s/prozalibre/v2/rWq3Qp4ZlPGKduc1qkgLHM_zJjSACmk0BRPxQqhnNLU.ttf",
            "800": "http://fonts.gstatic.com/s/prozalibre/v2/4gjxWDPA6RMWrIls_qgQBg89PwPrYLaRFJ-HNCU9NbA.ttf",
            "800italic": "http://fonts.gstatic.com/s/prozalibre/v2/rWq3Qp4ZlPGKduc1qkgLHCad_7rtf4IdDfsLVg-2OV4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Puritan",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/puritan/v9/wv_RtgVBSCn-or2MC0n4Kg.ttf",
            "italic": "http://fonts.gstatic.com/s/puritan/v9/BqZX8Tp200LeMv1KlzXgLQ.ttf",
            "700": "http://fonts.gstatic.com/s/puritan/v9/pJS2SdwI0SCiVnO0iQSFT_esZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/puritan/v9/rFG3XkMJL75nUNZwCEIJqC3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Purple Purse",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/purplepurse/v6/Q5heFUrdmei9axbMITxxxS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Quando",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/quando/v6/03nDiEZuO2-h3xvtG6UmHg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Quantico",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/quantico/v6/pwSnP8Xpaix2rIz99HrSlQ.ttf",
            "italic": "http://fonts.gstatic.com/s/quantico/v6/KQhDd2OsZi6HiITUeFQ2U_esZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/quantico/v6/OVZZzjcZ3Hkq2ojVcUtDjaCWcynf_cDxXwCLxiixG1c.ttf",
            "700italic": "http://fonts.gstatic.com/s/quantico/v6/HeCYRcZbdRso3ZUu01ELbQJKKGfqHaYFsRG-T3ceEVo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Quattrocento",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/quattrocento/v9/WZDISdyil4HsmirlOdBRFC3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/quattrocento/v9/Uvi-cRwyvqFpl9j3oT2mqkD2ttfZwueP-QU272T9-k4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Quattrocento Sans",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/quattrocentosans/v10/efd6FGWWGX5Z3ztwLBrG9eAj_ty82iuwwDTNEYXGiyQ.ttf",
            "italic": "http://fonts.gstatic.com/s/quattrocentosans/v10/8PXYbvM__bjl0rBnKiByg532VBCoA_HLsn85tSWZmdo.ttf",
            "700": "http://fonts.gstatic.com/s/quattrocentosans/v10/tXSgPxDl7Lk8Zr_5qX8FIbqxG25nQNOioCZSK4sU-CA.ttf",
            "700italic": "http://fonts.gstatic.com/s/quattrocentosans/v10/8N1PdXpbG6RtFvTjl-5E7buqAJxizi8Dk_SK5et7kMg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Questrial",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/questrial/v7/MoHHaw_WwNs_hd9ob1zTVw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Quicksand",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "500",
            "700"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/quicksand/v7/qhfoJiLu10kFjChCCTvGlC3USBnSvpkopQaUR-2r7iU.ttf",
            "regular": "http://fonts.gstatic.com/s/quicksand/v7/Ngv3fIJjKB7sD-bTUGIFCA.ttf",
            "500": "http://fonts.gstatic.com/s/quicksand/v7/FRGja7LlrG1Mypm0hCq0Di3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/quicksand/v7/32nyIRHyCu6iqEka_hbKsi3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Quintessential",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/quintessential/v5/mmk6ioesnTrEky_Zb92E5s02lXbtMOtZWfuxKeMZO8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Qwigley",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/qwigley/v7/aDqxws-KubFID85TZHFouw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Racing Sans One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/racingsansone/v5/1r3DpWaCiT7y3PD4KgkNyDjVlsJB_M_Q_LtZxsoxvlw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Radley",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v12",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/radley/v12/FgE9di09a-mXGzAIyI6Q9Q.ttf",
            "italic": "http://fonts.gstatic.com/s/radley/v12/Z_JcACuPAOO2f9kzQcGRug.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rajdhani",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/rajdhani/v7/9pItuEhQZVGdq8spnHTku6CWcynf_cDxXwCLxiixG1c.ttf",
            "regular": "http://fonts.gstatic.com/s/rajdhani/v7/Wfy5zp4PGFAFS7-Wetehzw.ttf",
            "500": "http://fonts.gstatic.com/s/rajdhani/v7/nd_5ZpVwm710HcLual0fBqCWcynf_cDxXwCLxiixG1c.ttf",
            "600": "http://fonts.gstatic.com/s/rajdhani/v7/5fnmZahByDeTtgxIiqbJSaCWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/rajdhani/v7/UBK6d2Hg7X7wYLlF92aXW6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rakkas",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "arabic"
           ],
           "version": "v3",
           "lastModified": "2017-11-07",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rakkas/v3/XWSZpoSbAR4myQgKbSJM9A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Raleway",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v12",
           "lastModified": "2017-10-11",
           "files": {
            "100": "http://fonts.gstatic.com/s/raleway/v12/UDfD6oxBaBnmFJwQ7XAFNw.ttf",
            "100italic": "http://fonts.gstatic.com/s/raleway/v12/hUpHtml6IPNuUR-FwVi2UKCWcynf_cDxXwCLxiixG1c.ttf",
            "200": "http://fonts.gstatic.com/s/raleway/v12/LAQwev4hdCtYkOYX4Oc7nPesZW2xOQ-xsNqO47m55DA.ttf",
            "200italic": "http://fonts.gstatic.com/s/raleway/v12/N2DIbZG4399cPGfifZUEQi3USBnSvpkopQaUR-2r7iU.ttf",
            "300": "http://fonts.gstatic.com/s/raleway/v12/2VvSZU2kb4DZwFfRM4fLQPesZW2xOQ-xsNqO47m55DA.ttf",
            "300italic": "http://fonts.gstatic.com/s/raleway/v12/TVSB8ogXDKMcnAAJ5CqrUi3USBnSvpkopQaUR-2r7iU.ttf",
            "regular": "http://fonts.gstatic.com/s/raleway/v12/_dCzxpXzIS3sL-gdJWAP8A.ttf",
            "italic": "http://fonts.gstatic.com/s/raleway/v12/utU2m1gdZSfuQpArSy5Dbw.ttf",
            "500": "http://fonts.gstatic.com/s/raleway/v12/348gn6PEmbLDWlHbbV15d_esZW2xOQ-xsNqO47m55DA.ttf",
            "500italic": "http://fonts.gstatic.com/s/raleway/v12/S7vGLZZ40c85SJgiptJGVy3USBnSvpkopQaUR-2r7iU.ttf",
            "600": "http://fonts.gstatic.com/s/raleway/v12/M7no6oPkwKYJkedjB1wqEvesZW2xOQ-xsNqO47m55DA.ttf",
            "600italic": "http://fonts.gstatic.com/s/raleway/v12/OY22yoG8EJ3IN_muVWm29C3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/raleway/v12/VGEV9-DrblisWOWLbK-1XPesZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/raleway/v12/lFxvRPuGFG5ktd7P0WRwKi3USBnSvpkopQaUR-2r7iU.ttf",
            "800": "http://fonts.gstatic.com/s/raleway/v12/mMh0JrsYMXcLO69jgJwpUvesZW2xOQ-xsNqO47m55DA.ttf",
            "800italic": "http://fonts.gstatic.com/s/raleway/v12/us4LjTCmlYgh3W8CKujEJi3USBnSvpkopQaUR-2r7iU.ttf",
            "900": "http://fonts.gstatic.com/s/raleway/v12/ajQQGcDBLcyLpaUfD76UuPesZW2xOQ-xsNqO47m55DA.ttf",
            "900italic": "http://fonts.gstatic.com/s/raleway/v12/oY2RadnkHfshu5f0FLsgVS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Raleway Dots",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ralewaydots/v5/lhLgmWCRcyz-QXo8LCzTfC3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ramabhadra",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ramabhadra/v6/JyhxLXRVQChLDGADS_c5MPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ramaraja",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ramaraja/v2/XIqzxFapVczstBedHdQTiw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rambla",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rambla/v5/YaTmpvm5gFg_ShJKTQmdzg.ttf",
            "italic": "http://fonts.gstatic.com/s/rambla/v5/mhUgsKmp0qw3uATdDDAuwA.ttf",
            "700": "http://fonts.gstatic.com/s/rambla/v5/C5VZH8BxQKmnBuoC00UPpw.ttf",
            "700italic": "http://fonts.gstatic.com/s/rambla/v5/ziMzUZya6QahrKONSI1TzqCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rammetto One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rammettoone/v6/mh0uQ1tV8QgSx9v_KyEYPC3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ranchers",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ranchers/v5/9ya8CZYhqT66VERfjQ7eLA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rancho",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rancho/v8/ekp3-4QykC4--6KaslRgHA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ranga",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ranga/v3/xpW6zFTNzY1JykoBIqE1Zg.ttf",
            "700": "http://fonts.gstatic.com/s/ranga/v3/h8G_gEUH7vHKH-NkjAs34A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rasa",
           "category": "serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "gujarati",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/rasa/v3/XQ1gDq2EqBtGcdadPyPbww.ttf",
            "regular": "http://fonts.gstatic.com/s/rasa/v3/A5PoJUwX_PxTsywxlRB79g.ttf",
            "500": "http://fonts.gstatic.com/s/rasa/v3/HfsDi_Ls3NARO_YEODINGg.ttf",
            "600": "http://fonts.gstatic.com/s/rasa/v3/f-fvbq-hWIQCdmT3QHGk3Q.ttf",
            "700": "http://fonts.gstatic.com/s/rasa/v3/TSF3CG-8Cn72jvaVdqtMMQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rationale",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rationale/v8/7M2eN-di0NGLQse7HzJRfg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ravi Prakash",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/raviprakash/v4/8EzbM7Rymjk25jWeHxbO6C3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Redressed",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/redressed/v8/3aZ5sTBppH3oSm5SabegtA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Reem Kufi",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "arabic"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/reemkufi/v3/xLwMbK_T1g-h9p-rp60A1Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Reenie Beanie",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/reeniebeanie/v8/ljpKc6CdXusL1cnGUSamX4jjx0o0jr6fNXxPgYh_a8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Revalia",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/revalia/v5/1TKw66fF5_poiL0Ktgo4_A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rhodium Libre",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rhodiumlibre/v2/Vxr7A4-xE2zsBDDI8BcseIjjx0o0jr6fNXxPgYh_a8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ribeye",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ribeye/v6/e5w3VE8HnWBln4Ll6lUj3Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ribeye Marrow",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ribeyemarrow/v7/q7cBSA-4ErAXBCDFPrhlY0cTNmV93fYG7UKgsLQNQWs.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Righteous",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/righteous/v6/0nRRWM_gCGCt2S-BCfN8WQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Risque",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/risque/v5/92RnElGnl8yHP97-KV3Fyg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Roboto",
           "category": "sans-serif",
           "variants": [
            "100",
            "100italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "700",
            "700italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v18",
           "lastModified": "2017-10-16",
           "files": {
            "100": "http://fonts.gstatic.com/s/roboto/v18/7MygqTe2zs9YkP0adA9QQQ.ttf",
            "100italic": "http://fonts.gstatic.com/s/roboto/v18/T1xnudodhcgwXCmZQ490TPesZW2xOQ-xsNqO47m55DA.ttf",
            "300": "http://fonts.gstatic.com/s/roboto/v18/dtpHsbgPEm2lVWciJZ0P-A.ttf",
            "300italic": "http://fonts.gstatic.com/s/roboto/v18/iE8HhaRzdhPxC93dOdA056CWcynf_cDxXwCLxiixG1c.ttf",
            "regular": "http://fonts.gstatic.com/s/roboto/v18/W5F8_SL0XFawnjxHGsZjJA.ttf",
            "italic": "http://fonts.gstatic.com/s/roboto/v18/hcKoSgxdnKlbH5dlTwKbow.ttf",
            "500": "http://fonts.gstatic.com/s/roboto/v18/Uxzkqj-MIMWle-XP2pDNAA.ttf",
            "500italic": "http://fonts.gstatic.com/s/roboto/v18/daIfzbEw-lbjMyv4rMUUTqCWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/roboto/v18/bdHGHleUa-ndQCOrdpfxfw.ttf",
            "700italic": "http://fonts.gstatic.com/s/roboto/v18/owYYXKukxFDFjr0ZO8NXh6CWcynf_cDxXwCLxiixG1c.ttf",
            "900": "http://fonts.gstatic.com/s/roboto/v18/H1vB34nOKWXqzKotq25pcg.ttf",
            "900italic": "http://fonts.gstatic.com/s/roboto/v18/b9PWBSMHrT2zM5FgUdtu0aCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Roboto Condensed",
           "category": "sans-serif",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v16",
           "lastModified": "2017-10-11",
           "files": {
            "300": "http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nJRhFVcex_hajThhFkHyhYk.ttf",
            "300italic": "http://fonts.gstatic.com/s/robotocondensed/v16/mg0cGfGRUERshzBlvqxeAPYa9bgCHecWXGgisnodcS0.ttf",
            "regular": "http://fonts.gstatic.com/s/robotocondensed/v16/Zd2E9abXLFGSr9G3YK2MsKDbm6fPDOZJsR8PmdG62gY.ttf",
            "italic": "http://fonts.gstatic.com/s/robotocondensed/v16/BP5K8ZAJv9qEbmuFp8RpJY_eiqgTfYGaH0bJiUDZ5GA.ttf",
            "700": "http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nPOYkGiSOYDq_T7HbIOV1hA.ttf",
            "700italic": "http://fonts.gstatic.com/s/robotocondensed/v16/mg0cGfGRUERshzBlvqxeAE2zk2RGRC3SlyyLLQfjS_8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Roboto Mono",
           "category": "monospace",
           "variants": [
            "100",
            "100italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/robotomono/v5/aOIeRp72J9_Hp_8KwQ9M-YAWxXGWZ3yJw6KhWS7MxOk.ttf",
            "100italic": "http://fonts.gstatic.com/s/robotomono/v5/rqQ1zSE-ZGCKVZgew-A9dgyDtfpXZi-8rXUZYR4dumU.ttf",
            "300": "http://fonts.gstatic.com/s/robotomono/v5/N4duVc9C58uwPiY8_59Fzy9-WlPSxbfiI49GsXo3q0g.ttf",
            "300italic": "http://fonts.gstatic.com/s/robotomono/v5/1OsMuiiO6FCF2x67vzDKA2o9eWDfYYxG3A176Zl7aIg.ttf",
            "regular": "http://fonts.gstatic.com/s/robotomono/v5/eJ4cxQe85Lo39t-LVoKa26CWcynf_cDxXwCLxiixG1c.ttf",
            "italic": "http://fonts.gstatic.com/s/robotomono/v5/mE0EPT_93c7f86_WQexR3EeOrDcLawS7-ssYqLr2Xp4.ttf",
            "500": "http://fonts.gstatic.com/s/robotomono/v5/N4duVc9C58uwPiY8_59Fz8CNfqCYlB_eIx7H1TVXe60.ttf",
            "500italic": "http://fonts.gstatic.com/s/robotomono/v5/1OsMuiiO6FCF2x67vzDKA2nWRcJAYo5PSCx8UfGMHCI.ttf",
            "700": "http://fonts.gstatic.com/s/robotomono/v5/N4duVc9C58uwPiY8_59Fz3e1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "700italic": "http://fonts.gstatic.com/s/robotomono/v5/1OsMuiiO6FCF2x67vzDKA8_zJjSACmk0BRPxQqhnNLU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Roboto Slab",
           "category": "serif",
           "variants": [
            "100",
            "300",
            "regular",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-11",
           "files": {
            "100": "http://fonts.gstatic.com/s/robotoslab/v7/MEz38VLIFL-t46JUtkIEgIAWxXGWZ3yJw6KhWS7MxOk.ttf",
            "300": "http://fonts.gstatic.com/s/robotoslab/v7/dazS1PrQQuCxC3iOAJFEJS9-WlPSxbfiI49GsXo3q0g.ttf",
            "regular": "http://fonts.gstatic.com/s/robotoslab/v7/3__ulTNA7unv0UtplybPiqCWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/robotoslab/v7/dazS1PrQQuCxC3iOAJFEJXe1Pd76Vl7zRpE7NLJQ7XU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rochester",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rochester/v8/bnj8tmQBiOkdji_G_yvypg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rock Salt",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rocksalt/v8/Zy7JF9h9WbhD9V3SFMQ1UQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rokkitt",
           "category": "serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v12",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/rokkitt/v12/_3YC6rPA1FdHK3T5HJAiKA.ttf",
            "200": "http://fonts.gstatic.com/s/rokkitt/v12/YawjzRx4kAyF2FdhIXfg1_esZW2xOQ-xsNqO47m55DA.ttf",
            "300": "http://fonts.gstatic.com/s/rokkitt/v12/Cw0HfZi5axnl2GTVcAe4x_esZW2xOQ-xsNqO47m55DA.ttf",
            "regular": "http://fonts.gstatic.com/s/rokkitt/v12/GMA7Z_ToF8uSvpZAgnp_VQ.ttf",
            "500": "http://fonts.gstatic.com/s/rokkitt/v12/jSxUaZL9JCo117IMemf-iPesZW2xOQ-xsNqO47m55DA.ttf",
            "600": "http://fonts.gstatic.com/s/rokkitt/v12/b4_SvUo9hy0bV60RoA1RKPesZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/rokkitt/v12/gxlo-sr3rPmvgSixYog_ofesZW2xOQ-xsNqO47m55DA.ttf",
            "800": "http://fonts.gstatic.com/s/rokkitt/v12/mCok2W9ZHFgB-LY6ITuapfesZW2xOQ-xsNqO47m55DA.ttf",
            "900": "http://fonts.gstatic.com/s/rokkitt/v12/riY221k9xwvseUAhNXMjQPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Romanesco",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/romanesco/v6/2udIjUrpK_CPzYSxRVzD4Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ropa Sans",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ropasans/v7/Gba7ZzVBuhg6nX_AoSwlkQ.ttf",
            "italic": "http://fonts.gstatic.com/s/ropasans/v7/V1zbhZQscNrh63dy5Jk2nqCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rosario",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v12",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rosario/v12/bL-cEh8dXtDupB2WccA2LA.ttf",
            "italic": "http://fonts.gstatic.com/s/rosario/v12/pkflNy18HEuVVx4EOjeb_Q.ttf",
            "700": "http://fonts.gstatic.com/s/rosario/v12/nrS6PJvDWN42RP4TFWccd_esZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/rosario/v12/EOgFX2Va5VGrkhn_eDpIRS3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rosarivo",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rosarivo/v5/EmPiINK0qyqc7KSsNjJamA.ttf",
            "italic": "http://fonts.gstatic.com/s/rosarivo/v5/u3VuWsWQlX1pDqsbz4paNPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rouge Script",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rougescript/v6/AgXDSqZJmy12qS0ixjs6Vy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rozha One",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rozhaone/v4/PyrMHQ6lucEIxwKmhqsX8A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rubik",
           "category": "sans-serif",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "700",
            "700italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "hebrew",
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-11-21",
           "files": {
            "300": "http://fonts.gstatic.com/s/rubik/v7/o1vXYO8YwDpErHEAPAxpOg.ttf",
            "300italic": "http://fonts.gstatic.com/s/rubik/v7/NyXDvUhvZLSWiVfGa5KM-vesZW2xOQ-xsNqO47m55DA.ttf",
            "regular": "http://fonts.gstatic.com/s/rubik/v7/4sMyW_teKWHB3K8Hm-Il6A.ttf",
            "italic": "http://fonts.gstatic.com/s/rubik/v7/elD65ddI0qvNcCh42b1Iqg.ttf",
            "500": "http://fonts.gstatic.com/s/rubik/v7/D4HihERG27s-BJrQ4dvkbw.ttf",
            "500italic": "http://fonts.gstatic.com/s/rubik/v7/0hcxMdoMbXtHiEM1ebdN6PesZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/rubik/v7/m1GGHcpLe6Mb0_sAyjXE4g.ttf",
            "700italic": "http://fonts.gstatic.com/s/rubik/v7/R4g_rs714cUXVZcdnRdHw_esZW2xOQ-xsNqO47m55DA.ttf",
            "900": "http://fonts.gstatic.com/s/rubik/v7/mOHfPRl5uP4vw7-5-dbnng.ttf",
            "900italic": "http://fonts.gstatic.com/s/rubik/v7/HH1b7kBbwInqlw8OQxRE5vesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rubik Mono One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rubikmonoone/v6/e_cupPtD4BrZzotubJD7UbAREgn5xbW23GEXXnhMQ5Y.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ruda",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ruda/v9/jPEIPB7DM2DNK_uBGv2HGw.ttf",
            "700": "http://fonts.gstatic.com/s/ruda/v9/JABOu1SYOHcGXVejUq4w6g.ttf",
            "900": "http://fonts.gstatic.com/s/ruda/v9/Uzusv-enCjoIrznlJJaBRw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rufina",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rufina/v5/s9IFr_fIemiohfZS-ZRDbQ.ttf",
            "700": "http://fonts.gstatic.com/s/rufina/v5/D0RUjXFr55y4MVZY2Ww_RA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ruge Boogie",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rugeboogie/v8/U-TTmltL8aENLVIqYbI5QaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ruluko",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ruluko/v5/lv4cMwJtrx_dzmlK5SDc1g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rum Raisin",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rumraisin/v5/kDiL-ntDOEq26B7kYM7cx_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ruslan Display",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ruslandisplay/v8/SREdhlyLNUfU1VssRBfs3rgH88D3l9N4auRNHrNS708.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Russo One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/russoone/v6/zfwxZ--UhUc7FVfgT21PRQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ruthie",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ruthie/v7/vJ2LorukHSbWYoEs5juivg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Rye",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/rye/v5/VUrJlpPpSZxspl3w_yNOrQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sacramento",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sacramento/v5/_kv-qycSHMNdhjiv0Kj7BvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sahitya",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "devanagari"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sahitya/v2/wQWULcDbZqljdTfjOUtDvw.ttf",
            "700": "http://fonts.gstatic.com/s/sahitya/v2/Zm5hNvMwUyN3tC4GMkH1l_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sail",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sail/v8/iuEoG6kt-bePGvtdpL0GUQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Saira",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/saira/v2/Ozk8do2fTcpbNH9fymkZGg.ttf",
            "200": "http://fonts.gstatic.com/s/saira/v2/IqoIheMFTgcbZXFWbGwENA.ttf",
            "300": "http://fonts.gstatic.com/s/saira/v2/ANavK9Yw1m9jo7r6xy-MSg.ttf",
            "regular": "http://fonts.gstatic.com/s/saira/v2/Xscf3I_Twe9a3mnmbLi5XQ.ttf",
            "500": "http://fonts.gstatic.com/s/saira/v2/8JTYqpjvzQP3oTjzUn8w7Q.ttf",
            "600": "http://fonts.gstatic.com/s/saira/v2/7TS8zxqrCaFpOEscLh1xXg.ttf",
            "700": "http://fonts.gstatic.com/s/saira/v2/Vmcd_0w8o16ONteEu2UzSw.ttf",
            "800": "http://fonts.gstatic.com/s/saira/v2/R-CIR5SYaB7pZZbF4KBcmg.ttf",
            "900": "http://fonts.gstatic.com/s/saira/v2/NkJ3cJqxlFuVNRn8L9vVsg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Saira Condensed",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/sairacondensed/v3/g6ZiOTAus3rTCuLbft-lrhQ4ZQgT5IY6T956D4i2DOg.ttf",
            "200": "http://fonts.gstatic.com/s/sairacondensed/v3/iBnVn24meOdNw5Ie3y-w-t_1mjc__NNUUqnuBhyrdnQ.ttf",
            "300": "http://fonts.gstatic.com/s/sairacondensed/v3/iBnVn24meOdNw5Ie3y-w-mOGg88i8doN2x6-0_j_XSs.ttf",
            "regular": "http://fonts.gstatic.com/s/sairacondensed/v3/RzMaXT8ujYB0FpOoZJ_AtSQPsWWoiv__AzYJ9Zzn9II.ttf",
            "500": "http://fonts.gstatic.com/s/sairacondensed/v3/iBnVn24meOdNw5Ie3y-w-gRL_-ABKXdjsJSPT0lc2Bk.ttf",
            "600": "http://fonts.gstatic.com/s/sairacondensed/v3/iBnVn24meOdNw5Ie3y-w-rS5sSASxc8z4EQTQj7DCAI.ttf",
            "700": "http://fonts.gstatic.com/s/sairacondensed/v3/iBnVn24meOdNw5Ie3y-w-sAWgzcA047xWLixhLCofl8.ttf",
            "800": "http://fonts.gstatic.com/s/sairacondensed/v3/iBnVn24meOdNw5Ie3y-w-hVl4JojgVAnfiwswP7KrtY.ttf",
            "900": "http://fonts.gstatic.com/s/sairacondensed/v3/iBnVn24meOdNw5Ie3y-w-mCsDIq3El29Rd5VD3daJ_M.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Saira Extra Condensed",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/sairaextracondensed/v3/fW6xdUWepu0r8HZYLdXhdSi7tdGxScTr3oVgcrTUqWw.ttf",
            "200": "http://fonts.gstatic.com/s/sairaextracondensed/v3/XVu3ZHO65MpX5FDLl4hwfa1IHoFZjDq9yl49NJ3Y0wY.ttf",
            "300": "http://fonts.gstatic.com/s/sairaextracondensed/v3/XVu3ZHO65MpX5FDLl4hwfeZroXgFx_lT3TTeDaAqrWE.ttf",
            "regular": "http://fonts.gstatic.com/s/sairaextracondensed/v3/3XMbuc1UIdE_Bo4eJ-H3G4elbRYnLTTQA1Z5cVLnsI4.ttf",
            "500": "http://fonts.gstatic.com/s/sairaextracondensed/v3/XVu3ZHO65MpX5FDLl4hwfa4Ixr3FMLIaz6yY1ILODIU.ttf",
            "600": "http://fonts.gstatic.com/s/sairaextracondensed/v3/XVu3ZHO65MpX5FDLl4hwfcMHImBNo4aGUuMCjGiDijI.ttf",
            "700": "http://fonts.gstatic.com/s/sairaextracondensed/v3/XVu3ZHO65MpX5FDLl4hwfbGMx7y0UuyPIsLqSMg46Ks.ttf",
            "800": "http://fonts.gstatic.com/s/sairaextracondensed/v3/XVu3ZHO65MpX5FDLl4hwff3VPWKD9LjLpSGgTAgUUIc.ttf",
            "900": "http://fonts.gstatic.com/s/sairaextracondensed/v3/XVu3ZHO65MpX5FDLl4hwfb3y6LE9HhLx9tlnlwi3OAw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Saira Semi Condensed",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "100": "http://fonts.gstatic.com/s/sairasemicondensed/v3/W0qqtuwvTyZEzthCisMvJNpUFoAgdo3N6uMK4qBKl14.ttf",
            "200": "http://fonts.gstatic.com/s/sairasemicondensed/v3/AqP7QX0TdaZHs8pWxeHdZXmwZH8Mj4a8GCt9BVpguoM.ttf",
            "300": "http://fonts.gstatic.com/s/sairasemicondensed/v3/AqP7QX0TdaZHs8pWxeHdZf41r7gBuORyHypyaMk5V7M.ttf",
            "regular": "http://fonts.gstatic.com/s/sairasemicondensed/v3/E1gvqhdADptsO-uwP-KYOplmjOf-f3WTIBZyrvssS_s.ttf",
            "500": "http://fonts.gstatic.com/s/sairasemicondensed/v3/AqP7QX0TdaZHs8pWxeHdZQTR7LyNMQKOmEK2zaPVo7k.ttf",
            "600": "http://fonts.gstatic.com/s/sairasemicondensed/v3/AqP7QX0TdaZHs8pWxeHdZYxOyuVPIqzYlTscMcnFFdw.ttf",
            "700": "http://fonts.gstatic.com/s/sairasemicondensed/v3/AqP7QX0TdaZHs8pWxeHdZVhvgkvS4Vb80oyvTRs3xAw.ttf",
            "800": "http://fonts.gstatic.com/s/sairasemicondensed/v3/AqP7QX0TdaZHs8pWxeHdZbgNSs8Rfv-SK6bauL4DA_k.ttf",
            "900": "http://fonts.gstatic.com/s/sairasemicondensed/v3/AqP7QX0TdaZHs8pWxeHdZftJ9g8-32R6gX5VB508ZS0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Salsa",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/salsa/v7/BnpUCBmYdvggScEPs5JbpA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sanchez",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sanchez/v5/BEL8ao-E2LJ5eHPLB2UAiw.ttf",
            "italic": "http://fonts.gstatic.com/s/sanchez/v5/iSrhkWLexUZzDeNxNEHtzA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sancreek",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sancreek/v8/8ZacBMraWMvHly4IJI3esw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sansita",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sansita/v2/ey9oYobmakEwtEciY0G5Mg.ttf",
            "italic": "http://fonts.gstatic.com/s/sansita/v2/UkWzQlyaYvMqX8-kX9fI1A.ttf",
            "700": "http://fonts.gstatic.com/s/sansita/v2/q9hPUXq37zR3BVunMJi2HfesZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/sansita/v2/Izkki8H_L5Nxxk6vpKrxXS3USBnSvpkopQaUR-2r7iU.ttf",
            "800": "http://fonts.gstatic.com/s/sansita/v2/vOIsA3n-LuVE_PeoZ3aSFfesZW2xOQ-xsNqO47m55DA.ttf",
            "800italic": "http://fonts.gstatic.com/s/sansita/v2/4OvihNMj_b3nyu4KlgNNVS3USBnSvpkopQaUR-2r7iU.ttf",
            "900": "http://fonts.gstatic.com/s/sansita/v2/lwgTmJASMyrLsXnTfRSt7fesZW2xOQ-xsNqO47m55DA.ttf",
            "900italic": "http://fonts.gstatic.com/s/sansita/v2/JTPHz0Wyy3AImmVqi8CQTy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sarala",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sarala/v2/ohip9lixCHoBab7hTtgLnw.ttf",
            "700": "http://fonts.gstatic.com/s/sarala/v2/hpc9cz8KYsazwq2In_oJYw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sarina",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sarina/v6/XYtRfaSknHIU3NHdfTdXoQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sarpanch",
           "category": "sans-serif",
           "variants": [
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sarpanch/v3/YMBZdT27b6O5a1DADbAGSg.ttf",
            "500": "http://fonts.gstatic.com/s/sarpanch/v3/Ov7BxSrFSZYrfuJxL1LzQaCWcynf_cDxXwCLxiixG1c.ttf",
            "600": "http://fonts.gstatic.com/s/sarpanch/v3/WTnP2wnc0qSbUaaDG-2OQ6CWcynf_cDxXwCLxiixG1c.ttf",
            "700": "http://fonts.gstatic.com/s/sarpanch/v3/57kYsSpovYmFaEt2hsZhv6CWcynf_cDxXwCLxiixG1c.ttf",
            "800": "http://fonts.gstatic.com/s/sarpanch/v3/OKyqPLjdnuVghR-1TV6RzaCWcynf_cDxXwCLxiixG1c.ttf",
            "900": "http://fonts.gstatic.com/s/sarpanch/v3/JhYc2cr6kqWTo_P0vfvJR6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Satisfy",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/satisfy/v8/PRlyepkd-JCGHiN8e9WV2w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Scada",
           "category": "sans-serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/scada/v6/iZNC3ZEYwe3je6H-28d5Ug.ttf",
            "italic": "http://fonts.gstatic.com/s/scada/v6/PCGyLT1qNawkOUQ3uHFhBw.ttf",
            "700": "http://fonts.gstatic.com/s/scada/v6/t6XNWdMdVWUz93EuRVmifQ.ttf",
            "700italic": "http://fonts.gstatic.com/s/scada/v6/kLrBIf7V4mDMwcd_Yw7-D_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Scheherazade",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "arabic"
           ],
           "version": "v13",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/scheherazade/v13/AuKlqGWzUC-8XqMOmsqXiy3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/scheherazade/v13/C1wtT46acJkQxc6mPHwvHED2ttfZwueP-QU272T9-k4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Schoolbell",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/schoolbell/v8/95-3djEuubb3cJx-6E7j4vesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Scope One",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/scopeone/v3/ge7dY8Yht-n7_1cLHtoT3w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Seaweed Script",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/seaweedscript/v5/eorWAPpOvvWrPw5IHwE60BnpV0hQCek3EmWnCPrvGRM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Secular One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "hebrew",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/secularone/v2/yW9qikjpt_X0fh5oQJcdo6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sedgwick Ave",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sedgwickave/v3/pbgmsWX_2A5V-qqzaczoEy3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sedgwick Ave Display",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sedgwickavedisplay/v3/_2bQpgd1Hl3UOD3yDrU-cP912kD9slMJGfCNYtCeVl4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sevillana",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sevillana/v5/6m1Nh35oP7YEt00U80Smiw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Seymour One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/seymourone/v5/HrdG2AEG_870Xb7xBVv6C6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Shadows Into Light",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/shadowsintolight/v7/clhLqOv7MXn459PTh0gXYAW_5bEze-iLRNvGrRpJsfM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Shadows Into Light Two",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/shadowsintolighttwo/v5/gDxHeefcXIo-lOuZFCn2xVQrZk-Pga5KeEE_oZjkQjQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Shanti",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/shanti/v9/lc4nG_JG6Q-2FQSOMMhb_w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Share",
           "category": "display",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/share/v8/1ytD7zSb_-g9I2GG67vmVw.ttf",
            "italic": "http://fonts.gstatic.com/s/share/v8/a9YGdQWFRlNJ0zClJVaY3Q.ttf",
            "700": "http://fonts.gstatic.com/s/share/v8/XrU8e7a1YKurguyY2azk1Q.ttf",
            "700italic": "http://fonts.gstatic.com/s/share/v8/A992-bLVYwAflKu6iaznufesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Share Tech",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sharetech/v7/Dq3DuZ5_0SW3oEfAWFpen_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Share Tech Mono",
           "category": "monospace",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sharetechmono/v7/RQxK-3RA0Lnf3gnnnNrAscwD6PD0c3_abh9zHKQtbGU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Shojumaru",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/shojumaru/v5/WP8cxonzQQVAoI3RJQ2wug.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Short Stack",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/shortstack/v7/v4dXPI0Rm8XN9gk4SDdqlqCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Shrikhand",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "gujarati",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/shrikhand/v3/45jwHiwIDTWCy3Ir85vvKA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Siemreap",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v10",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/siemreap/v10/JSK-mOIsXwxo-zE9XDDl_g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sigmar One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sigmarone/v8/oh_5NxD5JBZksdo2EntKefesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Signika",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/signika/v8/0wDPonOzsYeEo-1KO78w4fesZW2xOQ-xsNqO47m55DA.ttf",
            "regular": "http://fonts.gstatic.com/s/signika/v8/WvDswbww0oAtvBg2l1L-9w.ttf",
            "600": "http://fonts.gstatic.com/s/signika/v8/lQMOF6NUN2ooR7WvB7tADvesZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/signika/v8/lEcnfPBICWJPv5BbVNnFJPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Signika Negative",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/signikanegative/v7/q5TOjIw4CenPw6C-TW06FjYFXpUPtCmIEFDvjUnLLaI.ttf",
            "regular": "http://fonts.gstatic.com/s/signikanegative/v7/Z-Q1hzbY8uAo3TpTyPFMXVM1lnCWMnren5_v6047e5A.ttf",
            "600": "http://fonts.gstatic.com/s/signikanegative/v7/q5TOjIw4CenPw6C-TW06FrKLaDJM01OezSVA2R_O3qI.ttf",
            "700": "http://fonts.gstatic.com/s/signikanegative/v7/q5TOjIw4CenPw6C-TW06FpYzPxtVvobH1w3hEppR8WI.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Simonetta",
           "category": "display",
           "variants": [
            "regular",
            "italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/simonetta/v7/fN8puNuahBo4EYMQgp12Yg.ttf",
            "italic": "http://fonts.gstatic.com/s/simonetta/v7/ynxQ3FqfF_Nziwy3T9ZwL6CWcynf_cDxXwCLxiixG1c.ttf",
            "900": "http://fonts.gstatic.com/s/simonetta/v7/22EwvvJ2r1VwVCxit5LcVi3USBnSvpkopQaUR-2r7iU.ttf",
            "900italic": "http://fonts.gstatic.com/s/simonetta/v7/WUXOpCgBZaRPrWtMCpeKoienaqEuufTBk9XMKnKmgDA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sintony",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sintony/v5/IDhCijoIMev2L6Lg5QsduQ.ttf",
            "700": "http://fonts.gstatic.com/s/sintony/v5/zVXQB1wqJn6PE4dWXoYpvPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sirin Stencil",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sirinstencil/v6/pRpLdo0SawzO7MoBpvowsImg74kgS1F7KeR8rWhYwkU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Six Caps",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sixcaps/v8/_XeDnO0HOV8Er9u97If1tQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Skranji",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/skranji/v5/jnOLPS0iZmDL7dfWnW3nIw.ttf",
            "700": "http://fonts.gstatic.com/s/skranji/v5/Lcrhg-fviVkxiEgoadsI1vesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Slabo 13px",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v4",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/slabo13px/v4/jPGWFTjRXfCSzy0qd1nqdvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Slabo 27px",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v4",
           "lastModified": "2017-10-11",
           "files": {
            "regular": "http://fonts.gstatic.com/s/slabo27px/v4/gC0o8B9eU21EafNkXlRAfPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Slackey",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/slackey/v8/evRIMNhGVCRJvCPv4kteeA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Smokum",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/smokum/v8/8YP4BuAcy97X8WfdKfxVRw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Smythe",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/smythe/v8/yACD1gy_MpbB9Ft42fUvYw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sniglet",
           "category": "display",
           "variants": [
            "regular",
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sniglet/v9/XWhyQLHH4SpCVsHRPRgu9w.ttf",
            "800": "http://fonts.gstatic.com/s/sniglet/v9/NLF91nBmcEfkBgcEWbHFa_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Snippet",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/snippet/v7/eUcYMLq2GtHZovLlQH_9kA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Snowburst One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/snowburstone/v5/zSQzKOPukXRux2oTqfYJjIjjx0o0jr6fNXxPgYh_a8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sofadi One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sofadione/v6/nirf4G12IcJ6KI8Eoj119fesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sofia",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sofia/v6/Imnvx0Ag9r6iDBFUY5_RaQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sonsie One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sonsieone/v6/KSP7xT1OSy0q2ob6RQOTWPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sorts Mill Goudy",
           "category": "serif",
           "variants": [
            "regular",
            "italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sortsmillgoudy/v7/JzRrPKdwEnE8F1TDmDLMUlIL2Qjg-Xlsg_fhGbe2P5U.ttf",
            "italic": "http://fonts.gstatic.com/s/sortsmillgoudy/v7/UUu1lKiy4hRmBWk599VL1TYNkCNSzLyoucKmbTguvr0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Source Code Pro",
           "category": "monospace",
           "variants": [
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/sourcecodepro/v7/leqv3v-yTsJNC7nFznSMqaXvKVW_haheDNrHjziJZVk.ttf",
            "300": "http://fonts.gstatic.com/s/sourcecodepro/v7/leqv3v-yTsJNC7nFznSMqVP7R5lD_au4SZC6Ks_vyWs.ttf",
            "regular": "http://fonts.gstatic.com/s/sourcecodepro/v7/mrl8jkM18OlOQN8JLgasD9Rl0pGnog23EMYRrBmUzJQ.ttf",
            "500": "http://fonts.gstatic.com/s/sourcecodepro/v7/leqv3v-yTsJNC7nFznSMqX63uKwMO11Of4rJWV582wg.ttf",
            "600": "http://fonts.gstatic.com/s/sourcecodepro/v7/leqv3v-yTsJNC7nFznSMqeiMeWyi5E_-XkTgB5psiDg.ttf",
            "700": "http://fonts.gstatic.com/s/sourcecodepro/v7/leqv3v-yTsJNC7nFznSMqfgXsetDviZcdR5OzC1KPcw.ttf",
            "900": "http://fonts.gstatic.com/s/sourcecodepro/v7/leqv3v-yTsJNC7nFznSMqRA_awHl7mXRjE_LQVochcU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Source Sans Pro",
           "category": "sans-serif",
           "variants": [
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-11",
           "files": {
            "200": "http://fonts.gstatic.com/s/sourcesanspro/v11/toadOcfmlt9b38dHJxOBGKXvKVW_haheDNrHjziJZVk.ttf",
            "200italic": "http://fonts.gstatic.com/s/sourcesanspro/v11/fpTVHK8qsXbIeTHTrnQH6OptKU7UIBg2hLM7eMTU8bI.ttf",
            "300": "http://fonts.gstatic.com/s/sourcesanspro/v11/toadOcfmlt9b38dHJxOBGFP7R5lD_au4SZC6Ks_vyWs.ttf",
            "300italic": "http://fonts.gstatic.com/s/sourcesanspro/v11/fpTVHK8qsXbIeTHTrnQH6DUpNKoQAsDux-Todp8f29w.ttf",
            "regular": "http://fonts.gstatic.com/s/sourcesanspro/v11/ODelI1aHBYDBqgeIAH2zlNRl0pGnog23EMYRrBmUzJQ.ttf",
            "italic": "http://fonts.gstatic.com/s/sourcesanspro/v11/M2Jd71oPJhLKp0zdtTvoMwRX4TIfMQQEXLu74GftruE.ttf",
            "600": "http://fonts.gstatic.com/s/sourcesanspro/v11/toadOcfmlt9b38dHJxOBGOiMeWyi5E_-XkTgB5psiDg.ttf",
            "600italic": "http://fonts.gstatic.com/s/sourcesanspro/v11/fpTVHK8qsXbIeTHTrnQH6Pp6lGoTTgjlW0sC4r900Co.ttf",
            "700": "http://fonts.gstatic.com/s/sourcesanspro/v11/toadOcfmlt9b38dHJxOBGPgXsetDviZcdR5OzC1KPcw.ttf",
            "700italic": "http://fonts.gstatic.com/s/sourcesanspro/v11/fpTVHK8qsXbIeTHTrnQH6LVT4locI09aamSzFGQlDMY.ttf",
            "900": "http://fonts.gstatic.com/s/sourcesanspro/v11/toadOcfmlt9b38dHJxOBGBA_awHl7mXRjE_LQVochcU.ttf",
            "900italic": "http://fonts.gstatic.com/s/sourcesanspro/v11/fpTVHK8qsXbIeTHTrnQH6A0NcF6HPGWR298uWIdxWv0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Source Serif Pro",
           "category": "serif",
           "variants": [
            "regular",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sourceserifpro/v5/CeUM4np2c42DV49nanp55YGL0S0YDpKs5GpLtZIQ0m4.ttf",
            "600": "http://fonts.gstatic.com/s/sourceserifpro/v5/yd5lDMt8Sva2PE17yiLarGi4cQnvCGV11m1KlXh97aQ.ttf",
            "700": "http://fonts.gstatic.com/s/sourceserifpro/v5/yd5lDMt8Sva2PE17yiLarEkpYHRvxGNSCrR82n_RDNk.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Space Mono",
           "category": "monospace",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/spacemono/v2/B_LOPq3uMVBqC_kmqwURBfesZW2xOQ-xsNqO47m55DA.ttf",
            "italic": "http://fonts.gstatic.com/s/spacemono/v2/7xgIgvUEl9Gvhtf7tXsRzC3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/spacemono/v2/vdpMRWfyjfCvDYTz00NEPAJKKGfqHaYFsRG-T3ceEVo.ttf",
            "700italic": "http://fonts.gstatic.com/s/spacemono/v2/y2NWQDXe2-qPj6a6rWkLc0D2ttfZwueP-QU272T9-k4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Special Elite",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/specialelite/v8/9-wW4zu3WNoD5Fjka35Jm4jjx0o0jr6fNXxPgYh_a8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Spectral",
           "category": "serif",
           "variants": [
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v4",
           "lastModified": "2017-11-21",
           "files": {
            "200": "http://fonts.gstatic.com/s/spectral/v4/RPsjutNSGdCMO0uTaGNKAaCWcynf_cDxXwCLxiixG1c.ttf",
            "200italic": "http://fonts.gstatic.com/s/spectral/v4/iTACFYcWCBGY-0cRjdYs3meudeTO44zf-ht3k-KNzwg.ttf",
            "300": "http://fonts.gstatic.com/s/spectral/v4/EUVu_t3TbuiAmr-6bAqTvaCWcynf_cDxXwCLxiixG1c.ttf",
            "300italic": "http://fonts.gstatic.com/s/spectral/v4/gXmD0bm_WQVxhEdjIN6xlEeOrDcLawS7-ssYqLr2Xp4.ttf",
            "regular": "http://fonts.gstatic.com/s/spectral/v4/iBj67vddkZHOY5CJLE9SnA.ttf",
            "italic": "http://fonts.gstatic.com/s/spectral/v4/lQA62MkEULvXDckLFYyk-vesZW2xOQ-xsNqO47m55DA.ttf",
            "500": "http://fonts.gstatic.com/s/spectral/v4/KuRhuOjLr-dCVlaHBMOF96CWcynf_cDxXwCLxiixG1c.ttf",
            "500italic": "http://fonts.gstatic.com/s/spectral/v4/hUloM7YPsU02LWYFA7w1x5p-63r6doWhTEbsfBIRJ7A.ttf",
            "600": "http://fonts.gstatic.com/s/spectral/v4/OSDAbiOpLs0hkOIFx2oUZKCWcynf_cDxXwCLxiixG1c.ttf",
            "600italic": "http://fonts.gstatic.com/s/spectral/v4/c6okfJABbOc8QqRI28ISV_pTEJqju4Hz1txDWij77d4.ttf",
            "700": "http://fonts.gstatic.com/s/spectral/v4/g1QizOcRY_Apk-QDq3rhOKCWcynf_cDxXwCLxiixG1c.ttf",
            "700italic": "http://fonts.gstatic.com/s/spectral/v4/v9WvdY1ll-vjpGHSRxsAIQJKKGfqHaYFsRG-T3ceEVo.ttf",
            "800": "http://fonts.gstatic.com/s/spectral/v4/qQdpRyS_X5oC54LeW0MlmKCWcynf_cDxXwCLxiixG1c.ttf",
            "800italic": "http://fonts.gstatic.com/s/spectral/v4/wYroR9dlOe2UFhp_3HJ9qqk3bhPBSBJ0bSJQ6acL-0g.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Spectral SC",
           "category": "serif",
           "variants": [
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-11-07",
           "files": {
            "200": "http://fonts.gstatic.com/s/spectralsc/v2/J7mO0YbtyrIkp56FY15FDUnzyIngrzGjGh22wPb6cGM.ttf",
            "200italic": "http://fonts.gstatic.com/s/spectralsc/v2/qF3tz9kiLvioTBEXL-lD1E2YN_dW5g9CXH6iztHQiR4.ttf",
            "300": "http://fonts.gstatic.com/s/spectralsc/v2/J7mO0YbtyrIkp56FY15FDS9-WlPSxbfiI49GsXo3q0g.ttf",
            "300italic": "http://fonts.gstatic.com/s/spectralsc/v2/qF3tz9kiLvioTBEXL-lD1Go9eWDfYYxG3A176Zl7aIg.ttf",
            "regular": "http://fonts.gstatic.com/s/spectralsc/v2/a0Q_ia82PHVBRtfk7cZ0qaCWcynf_cDxXwCLxiixG1c.ttf",
            "italic": "http://fonts.gstatic.com/s/spectralsc/v2/lgveV3UZmRqBIUMFUZ9jEUeOrDcLawS7-ssYqLr2Xp4.ttf",
            "500": "http://fonts.gstatic.com/s/spectralsc/v2/J7mO0YbtyrIkp56FY15FDcCNfqCYlB_eIx7H1TVXe60.ttf",
            "500italic": "http://fonts.gstatic.com/s/spectralsc/v2/qF3tz9kiLvioTBEXL-lD1GnWRcJAYo5PSCx8UfGMHCI.ttf",
            "600": "http://fonts.gstatic.com/s/spectralsc/v2/J7mO0YbtyrIkp56FY15FDZZ7xm-Bj30Bj2KNdXDzSZg.ttf",
            "600italic": "http://fonts.gstatic.com/s/spectralsc/v2/qF3tz9kiLvioTBEXL-lD1Je6We3S5L6hKLscKpOkmlo.ttf",
            "700": "http://fonts.gstatic.com/s/spectralsc/v2/J7mO0YbtyrIkp56FY15FDXe1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "700italic": "http://fonts.gstatic.com/s/spectralsc/v2/qF3tz9kiLvioTBEXL-lD1M_zJjSACmk0BRPxQqhnNLU.ttf",
            "800": "http://fonts.gstatic.com/s/spectralsc/v2/J7mO0YbtyrIkp56FY15FDQ89PwPrYLaRFJ-HNCU9NbA.ttf",
            "800italic": "http://fonts.gstatic.com/s/spectralsc/v2/qF3tz9kiLvioTBEXL-lD1Cad_7rtf4IdDfsLVg-2OV4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Spicy Rice",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/spicyrice/v6/WGCtz7cLoggXARPi9OGD6_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Spinnaker",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/spinnaker/v9/MQdIXivKITpjROUdiN6Jgg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Spirax",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/spirax/v6/IOKqhk-Ccl7y31yDsePPkw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Squada One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/squadaone/v6/3tzGuaJdD65cZVgfQzN8uvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sree Krushnadevaraya",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v5",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sreekrushnadevaraya/v5/CdsXmnHyEqVl1ahzOh5qnzjDZVem5Eb4d0dXjXa0F_Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sriracha",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "thai"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sriracha/v2/l-TXHmKwoHm6vtjy4oUz8Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Stalemate",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/stalemate/v5/wQLCnG0qB6mOu2Wit2dt_w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Stalinist One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v10",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/stalinistone/v10/MQpS-WezM9W4Dd7D3B7I-UT7eZ8.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Stardos Stencil",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/stardosstencil/v7/ygEOyTW9a6u4fi4OXEZeTFf2eT4jUldwg_9fgfY_tHc.ttf",
            "700": "http://fonts.gstatic.com/s/stardosstencil/v7/h4ExtgvoXhPtv9Ieqd-XC81wDCbBgmIo8UyjIhmkeSM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Stint Ultra Condensed",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/stintultracondensed/v6/8DqLK6-YSClFZt3u3EgOUYelbRYnLTTQA1Z5cVLnsI4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Stint Ultra Expanded",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/stintultraexpanded/v5/FeigX-wDDgHMCKuhekhedQ7dxr0N5HY0cZKknTIL6n4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Stoke",
           "category": "serif",
           "variants": [
            "300",
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/stoke/v7/Sell9475FOS8jUqQsfFsUQ.ttf",
            "regular": "http://fonts.gstatic.com/s/stoke/v7/A7qJNoqOm2d6o1E6e0yUFg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Strait",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/strait/v5/m4W73ViNmProETY2ybc-Bg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sue Ellen Francisco",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sueellenfrancisco/v8/TwHX4vSxMUnJUdEz1JIgrhzazJzPVbGl8jnf1tisRz4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Suez One",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "hebrew",
            "latin",
            "latin-ext"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/suezone/v2/xulpHtKbz3V8hoSLE2uKDw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sumana",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sumana/v2/wgdl__wAK7pzliiWs0Nlog.ttf",
            "700": "http://fonts.gstatic.com/s/sumana/v2/8AcM-KAproitONSBBHj3sQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sunshiney",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sunshiney/v8/kaWOb4pGbwNijM7CkxK1sQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Supermercado One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/supermercadoone/v7/kMGPVTNFiFEp1U274uBMb4mm5hmSKNFf3C5YoMa-lrM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Sura",
           "category": "serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v2",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/sura/v2/jznKrhTH5NezYxb0-Q5zzA.ttf",
            "700": "http://fonts.gstatic.com/s/sura/v2/Z5bXQaFGmoWicN1WlcncxA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Suranna",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/suranna/v5/PYmfr6TQeTqZ-r8HnPM-kA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Suravaram",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v4",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/suravaram/v4/G4dPee4pel_w2HqzavW4MA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Suwannaphum",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v11",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/suwannaphum/v11/1jIPOyXied3T79GCnSlCN6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Swanky and Moo Moo",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/swankyandmoomoo/v7/orVNZ9kDeE3lWp3U3YELu9DVLKqNC3_XMNHhr8S94FU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Syncopate",
           "category": "sans-serif",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/syncopate/v9/RQVwO52fAH6MI764EcaYtw.ttf",
            "700": "http://fonts.gstatic.com/s/syncopate/v9/S5z8ixiOoC4WJ1im6jAlYC3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Tangerine",
           "category": "handwriting",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/tangerine/v9/DTPeM3IROhnkz7aYG2a9sA.ttf",
            "700": "http://fonts.gstatic.com/s/tangerine/v9/UkFsr-RwJB_d2l9fIWsx3i3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Taprom",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "khmer"
           ],
           "version": "v9",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/taprom/v9/-KByU3BaUsyIvQs79qFObg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Tauri",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/tauri/v5/XIWeYJDXNqiVNej0zEqtGg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Taviraj",
           "category": "serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "thai"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/taviraj/v3/7iDtujKEc7hwcT6D0zLx-A.ttf",
            "100italic": "http://fonts.gstatic.com/s/taviraj/v3/ai0UdHXB1gi5etfpU0CZ6aCWcynf_cDxXwCLxiixG1c.ttf",
            "200": "http://fonts.gstatic.com/s/taviraj/v3/fn3qCO_sC_zLuf2hqWE37fesZW2xOQ-xsNqO47m55DA.ttf",
            "200italic": "http://fonts.gstatic.com/s/taviraj/v3/eDMMTK5GhTdvvz3R-ZWvay3USBnSvpkopQaUR-2r7iU.ttf",
            "300": "http://fonts.gstatic.com/s/taviraj/v3/1EIpbtG_cs5haG6Ba9wX8vesZW2xOQ-xsNqO47m55DA.ttf",
            "300italic": "http://fonts.gstatic.com/s/taviraj/v3/IEBfc1xGgsBbdCeXKNAtfS3USBnSvpkopQaUR-2r7iU.ttf",
            "regular": "http://fonts.gstatic.com/s/taviraj/v3/AH1eoWagKJhbVx4Poc3M1A.ttf",
            "italic": "http://fonts.gstatic.com/s/taviraj/v3/hAS5RxygdSnG4626KdkXuQ.ttf",
            "500": "http://fonts.gstatic.com/s/taviraj/v3/s8BuqYm5ebG2N1R4JkTp_fesZW2xOQ-xsNqO47m55DA.ttf",
            "500italic": "http://fonts.gstatic.com/s/taviraj/v3/319qfe3yzAi9RNFu-dI9zy3USBnSvpkopQaUR-2r7iU.ttf",
            "600": "http://fonts.gstatic.com/s/taviraj/v3/KscmiA6HGz7nCcHhaddQH_esZW2xOQ-xsNqO47m55DA.ttf",
            "600italic": "http://fonts.gstatic.com/s/taviraj/v3/ofRN6EMiboGiM2Ga3cG_yy3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/taviraj/v3/TY91892tTFNYCeCXjQ1AEPesZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/taviraj/v3/4Yzb6i1xtMRZn9oAQ484nS3USBnSvpkopQaUR-2r7iU.ttf",
            "800": "http://fonts.gstatic.com/s/taviraj/v3/oGWJbiDGcxlInLLnrLxTDvesZW2xOQ-xsNqO47m55DA.ttf",
            "800italic": "http://fonts.gstatic.com/s/taviraj/v3/MPtY5Qs3hwV4f0LUH-vVmy3USBnSvpkopQaUR-2r7iU.ttf",
            "900": "http://fonts.gstatic.com/s/taviraj/v3/RfIEodnN0NYWUdZHol5fdPesZW2xOQ-xsNqO47m55DA.ttf",
            "900italic": "http://fonts.gstatic.com/s/taviraj/v3/aDM2JaXSd_qo0nqKiBAq5C3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Teko",
           "category": "sans-serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/teko/v7/OobFGE9eo24rcBpN6zXDaQ.ttf",
            "regular": "http://fonts.gstatic.com/s/teko/v7/UtekqODEqZXSN2L-njejpA.ttf",
            "500": "http://fonts.gstatic.com/s/teko/v7/FQ0duU7gWM4cSaImOfAjBA.ttf",
            "600": "http://fonts.gstatic.com/s/teko/v7/QDx_i8H-TZ1IK1JEVrqwEQ.ttf",
            "700": "http://fonts.gstatic.com/s/teko/v7/xKfTxe_SWpH4xU75vmvylA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Telex",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/telex/v6/24-3xP9ywYeHOcFU3iGk8A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Tenali Ramakrishna",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v4",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/tenaliramakrishna/v4/M0nTmDqv2M7AGoGh-c946BZak5pSBHqWX6uyVMiMFoA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Tenor Sans",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/tenorsans/v8/dUBulmjNJJInvK5vL7O9yfesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Text Me One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/textmeone/v5/9em_3ckd_P5PQkP4aDyDLqCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "The Girl Next Door",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/thegirlnextdoor/v8/cWRA4JVGeEcHGcPl5hmX7kzo0nFFoM60ux_D9BUymX4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Tienne",
           "category": "serif",
           "variants": [
            "regular",
            "700",
            "900"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/tienne/v10/-IIfDl701C0z7-fy2kmGvA.ttf",
            "700": "http://fonts.gstatic.com/s/tienne/v10/JvoCDOlyOSEyYGRwCyfs3g.ttf",
            "900": "http://fonts.gstatic.com/s/tienne/v10/FBano5T521OWexj2iRYLMw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Tillana",
           "category": "handwriting",
           "variants": [
            "regular",
            "500",
            "600",
            "700",
            "800"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/tillana/v3/zN0D-jDPsr1HzU3VRFLY5g.ttf",
            "500": "http://fonts.gstatic.com/s/tillana/v3/gqdUngSIcY9tSla5eCZky_esZW2xOQ-xsNqO47m55DA.ttf",
            "600": "http://fonts.gstatic.com/s/tillana/v3/fqon6-r15hy8M1cyiYfQBvesZW2xOQ-xsNqO47m55DA.ttf",
            "700": "http://fonts.gstatic.com/s/tillana/v3/jGARMTxLrMerzTCpGBpMffesZW2xOQ-xsNqO47m55DA.ttf",
            "800": "http://fonts.gstatic.com/s/tillana/v3/pmTtNH_Ibktj5Cyc1XrP6vesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Timmana",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "telugu"
           ],
           "version": "v2",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/timmana/v2/T25SicsJUJkc2s2sbBsDnA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Tinos",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "hebrew",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/tinos/v11/EqpUbkVmutfwZ0PjpoGwCg.ttf",
            "italic": "http://fonts.gstatic.com/s/tinos/v11/slfyzlasCr9vTsaP4lUh9A.ttf",
            "700": "http://fonts.gstatic.com/s/tinos/v11/vHXfhX8jZuQruowfon93yQ.ttf",
            "700italic": "http://fonts.gstatic.com/s/tinos/v11/M6kfzvDMM0CdxdraoFpG6vesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Titan One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/titanone/v5/FbvpRvzfV_oipS0De3iAZg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Titillium Web",
           "category": "sans-serif",
           "variants": [
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-11",
           "files": {
            "200": "http://fonts.gstatic.com/s/titilliumweb/v6/anMUvcNT0H1YN4FII8wprzOdCrLccoxq42eaxM802O0.ttf",
            "200italic": "http://fonts.gstatic.com/s/titilliumweb/v6/RZunN20OBmkvrU7sA4GPPj4N98U-66ThNJvtgddRfBE.ttf",
            "300": "http://fonts.gstatic.com/s/titilliumweb/v6/anMUvcNT0H1YN4FII8wpr9ZAkYT8DuUZELiKLwMGWAo.ttf",
            "300italic": "http://fonts.gstatic.com/s/titilliumweb/v6/RZunN20OBmkvrU7sA4GPPrfzCkqg7ORZlRf2cc4mXu8.ttf",
            "regular": "http://fonts.gstatic.com/s/titilliumweb/v6/7XUFZ5tgS-tD6QamInJTcTyagQBwYgYywpS70xNq8SQ.ttf",
            "italic": "http://fonts.gstatic.com/s/titilliumweb/v6/r9OmwyQxrgzUAhaLET_KO-ixohbIP6lHkU-1Mgq95cY.ttf",
            "600": "http://fonts.gstatic.com/s/titilliumweb/v6/anMUvcNT0H1YN4FII8wpr28K9dEd5Ue-HTQrlA7E2xQ.ttf",
            "600italic": "http://fonts.gstatic.com/s/titilliumweb/v6/RZunN20OBmkvrU7sA4GPPgOhzTSndyK8UWja2yJjKLc.ttf",
            "700": "http://fonts.gstatic.com/s/titilliumweb/v6/anMUvcNT0H1YN4FII8wpr2-6tpSbB9YhmWtmd1_gi_U.ttf",
            "700italic": "http://fonts.gstatic.com/s/titilliumweb/v6/RZunN20OBmkvrU7sA4GPPio3LEw-4MM8Ao2j9wPOfpw.ttf",
            "900": "http://fonts.gstatic.com/s/titilliumweb/v6/anMUvcNT0H1YN4FII8wpr7L0GmZLri-m-nfoo0Vul4Y.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Trade Winds",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/tradewinds/v6/sDOCVgAxw6PEUi2xdMsoDaCWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Trirong",
           "category": "serif",
           "variants": [
            "100",
            "100italic",
            "200",
            "200italic",
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "800",
            "800italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext",
            "thai"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/trirong/v3/A4AP1moxqvtadq5CW3L17A.ttf",
            "100italic": "http://fonts.gstatic.com/s/trirong/v3/ke-m75CXBPHlqwRHmCTBi6CWcynf_cDxXwCLxiixG1c.ttf",
            "200": "http://fonts.gstatic.com/s/trirong/v3/QD8N5qk-agpAEYCSSWullPesZW2xOQ-xsNqO47m55DA.ttf",
            "200italic": "http://fonts.gstatic.com/s/trirong/v3/TLnptEEWKdIVHKJYBO592y3USBnSvpkopQaUR-2r7iU.ttf",
            "300": "http://fonts.gstatic.com/s/trirong/v3/mfCfGz4GqprWJZ47PUMDGfesZW2xOQ-xsNqO47m55DA.ttf",
            "300italic": "http://fonts.gstatic.com/s/trirong/v3/RnkK09k5OfEHFxd_smcYuC3USBnSvpkopQaUR-2r7iU.ttf",
            "regular": "http://fonts.gstatic.com/s/trirong/v3/lYu4kez-Enlvh2X-itx6CA.ttf",
            "italic": "http://fonts.gstatic.com/s/trirong/v3/kV0MzmWPKkglEtJf--dQhQ.ttf",
            "500": "http://fonts.gstatic.com/s/trirong/v3/6CsQ6UR1e8rURaEPxqnGBvesZW2xOQ-xsNqO47m55DA.ttf",
            "500italic": "http://fonts.gstatic.com/s/trirong/v3/I7H5Vf-5oH45BHkyxaUodS3USBnSvpkopQaUR-2r7iU.ttf",
            "600": "http://fonts.gstatic.com/s/trirong/v3/1FjmLIhPhB6Yc7RWqO27mfesZW2xOQ-xsNqO47m55DA.ttf",
            "600italic": "http://fonts.gstatic.com/s/trirong/v3/BXLhSV51vCWUiACSqyWe6i3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/trirong/v3/ab8hG5CTSzMAobTnPgcDP_esZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/trirong/v3/CEBv6IoZawJuRHdATx4LQi3USBnSvpkopQaUR-2r7iU.ttf",
            "800": "http://fonts.gstatic.com/s/trirong/v3/UBRQXGJvi5EHcyI5wwZew_esZW2xOQ-xsNqO47m55DA.ttf",
            "800italic": "http://fonts.gstatic.com/s/trirong/v3/lGUgSzOvjUqrsrJfnROivC3USBnSvpkopQaUR-2r7iU.ttf",
            "900": "http://fonts.gstatic.com/s/trirong/v3/Lam1ewMdiP3O-bVYT-W6t_esZW2xOQ-xsNqO47m55DA.ttf",
            "900italic": "http://fonts.gstatic.com/s/trirong/v3/EtuLHyx5DS9oX5NoKhYlkC3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Trocchi",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/trocchi/v6/uldNPaKrUGVeGCVsmacLwA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Trochut",
           "category": "display",
           "variants": [
            "regular",
            "italic",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/trochut/v5/6Y65B0x-2JsnYt16OH5omw.ttf",
            "italic": "http://fonts.gstatic.com/s/trochut/v5/pczUwr4ZFvC79TgNO5cZng.ttf",
            "700": "http://fonts.gstatic.com/s/trochut/v5/lWqNOv6ISR8ehNzGLFLnJ_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Trykker",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/trykker/v6/YiVrVJpBFN7I1l_CWk6yYQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Tulpen One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/tulpenone/v7/lwcTfVIEVxpZLZlWzR5baPesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ubuntu",
           "category": "sans-serif",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v11",
           "lastModified": "2017-10-11",
           "files": {
            "300": "http://fonts.gstatic.com/s/ubuntu/v11/4iCv6KVjbNBYlgoC1CzTtw.ttf",
            "300italic": "http://fonts.gstatic.com/s/ubuntu/v11/4iCp6KVjbNBYlgoKejZftWyI.ttf",
            "regular": "http://fonts.gstatic.com/s/ubuntu/v11/4iCs6KVjbNBYlgo6eA.ttf",
            "italic": "http://fonts.gstatic.com/s/ubuntu/v11/4iCu6KVjbNBYlgoKeg7z.ttf",
            "500": "http://fonts.gstatic.com/s/ubuntu/v11/4iCv6KVjbNBYlgoCjC3Ttw.ttf",
            "500italic": "http://fonts.gstatic.com/s/ubuntu/v11/4iCp6KVjbNBYlgoKejYHtGyI.ttf",
            "700": "http://fonts.gstatic.com/s/ubuntu/v11/4iCv6KVjbNBYlgoCxCvTtw.ttf",
            "700italic": "http://fonts.gstatic.com/s/ubuntu/v11/4iCp6KVjbNBYlgoKejZPsmyI.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ubuntu Condensed",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ubuntucondensed/v8/DBCt-NXN57MTAFjitYxdrKDbm6fPDOZJsR8PmdG62gY.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ubuntu Mono",
           "category": "monospace",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "cyrillic",
            "greek-ext",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ubuntumono/v7/EgeuS9OtEmA0y_JRo03MQaCWcynf_cDxXwCLxiixG1c.ttf",
            "italic": "http://fonts.gstatic.com/s/ubuntumono/v7/KAKuHXAHZOeECOWAHsRKA0eOrDcLawS7-ssYqLr2Xp4.ttf",
            "700": "http://fonts.gstatic.com/s/ubuntumono/v7/ceqTZGKHipo8pJj4molytne1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "700italic": "http://fonts.gstatic.com/s/ubuntumono/v7/n_d8tv_JOIiYyMXR4eaV9c_zJjSACmk0BRPxQqhnNLU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Ultra",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/ultra/v10/OW8uXkOstRADuhEmGOFQLA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Uncial Antiqua",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/uncialantiqua/v5/F-leefDiFwQXsyd6eaSllqrFJ4O13IHVxZbM6yoslpo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Underdog",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/underdog/v6/gBv9yjez_-5PnTprHWq0ig.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Unica One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/unicaone/v5/KbYKlhWMDpatWViqDkNQgA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "UnifrakturCook",
           "category": "display",
           "variants": [
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "700": "http://fonts.gstatic.com/s/unifrakturcook/v9/ASwh69ykD8iaoYijVEU6RrWZkcsCTHKV51zmcUsafQ0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "UnifrakturMaguntia",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/unifrakturmaguntia/v8/7KWy3ymCVR_xfAvvcIXm3-kdNg30GQauG_DE-tMYtWk.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Unkempt",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/unkempt/v9/NLLBeNSspr0RGs71R5LHWA.ttf",
            "700": "http://fonts.gstatic.com/s/unkempt/v9/V7H-GCl9bgwGwqFqTTgDHvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Unlock",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/unlock/v7/rXEQzK7uIAlhoyoAEiMy1w.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Unna",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v10",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/unna/v10/UAS0AM7AmbdCNY_80xyAZQ.ttf",
            "italic": "http://fonts.gstatic.com/s/unna/v10/CB25jfOme9BL61pT4h1_0A.ttf",
            "700": "http://fonts.gstatic.com/s/unna/v10/V-r3KRrJqBWlu97fCUB8Nw.ttf",
            "700italic": "http://fonts.gstatic.com/s/unna/v10/H7rJH2hD4wVI9bOhx98O8A.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "VT323",
           "category": "monospace",
           "variants": [
            "regular"
           ],
           "subsets": [
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/vt323/v9/ITU2YQfM073o1iYK3nSOmQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Vampiro One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/vampiroone/v8/OVDs4gY4WpS5u3Qd1gXRW6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Varela",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/varela/v8/ON7qs0cKUUixhhDFXlZUjw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Varela Round",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "hebrew",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/varelaround/v9/APH4jr0uSos5wiut5cpjri3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Vast Shadow",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/vastshadow/v7/io4hqKX3ibiqQQjYfW0-h6CWcynf_cDxXwCLxiixG1c.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Vesper Libre",
           "category": "serif",
           "variants": [
            "regular",
            "500",
            "700",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/vesperlibre/v9/Cg-TeZFsqV8BaOcoVwzu2C3USBnSvpkopQaUR-2r7iU.ttf",
            "500": "http://fonts.gstatic.com/s/vesperlibre/v9/0liLgNkygqH6EOtsVjZDsZMQuUSAwdHsY8ov_6tk1oA.ttf",
            "700": "http://fonts.gstatic.com/s/vesperlibre/v9/0liLgNkygqH6EOtsVjZDsUD2ttfZwueP-QU272T9-k4.ttf",
            "900": "http://fonts.gstatic.com/s/vesperlibre/v9/0liLgNkygqH6EOtsVjZDsaObDOjC3UL77puoeHsE3fw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Vibur",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/vibur/v8/xB9aKsUbJo68XP0bAg2iLw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Vidaloka",
           "category": "serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/vidaloka/v9/C6Nul0ogKUWkx356rrt9RA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Viga",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/viga/v6/uD87gDbhS7frHLX4uL6agg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Voces",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/voces/v7/QoBH6g6yKgNIgvL8A2aE2Q.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Volkhov",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/volkhov/v9/MDIZAofe1T_J3un5Kgo8zg.ttf",
            "italic": "http://fonts.gstatic.com/s/volkhov/v9/1rTjmztKEpbkKH06JwF8Yw.ttf",
            "700": "http://fonts.gstatic.com/s/volkhov/v9/L8PbKS-kEoLHm7nP--NCzPesZW2xOQ-xsNqO47m55DA.ttf",
            "700italic": "http://fonts.gstatic.com/s/volkhov/v9/W6oG0QDDjCgj0gmsHE520C3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Vollkorn",
           "category": "serif",
           "variants": [
            "regular",
            "italic",
            "600",
            "600italic",
            "700",
            "700italic",
            "900",
            "900italic"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "greek",
            "cyrillic-ext"
           ],
           "version": "v8",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/vollkorn/v8/IiexqYAeh8uII223thYx3w.ttf",
            "italic": "http://fonts.gstatic.com/s/vollkorn/v8/UuIzosgR1ovBhJFdwVp3fvesZW2xOQ-xsNqO47m55DA.ttf",
            "600": "http://fonts.gstatic.com/s/vollkorn/v8/gWz-6Uqzc1g8XxDn5f2-pKCWcynf_cDxXwCLxiixG1c.ttf",
            "600italic": "http://fonts.gstatic.com/s/vollkorn/v8/dU1kkg9Vvuo527vzySfgDPpTEJqju4Hz1txDWij77d4.ttf",
            "700": "http://fonts.gstatic.com/s/vollkorn/v8/gOwQjJVGXlDOONC12hVoBqCWcynf_cDxXwCLxiixG1c.ttf",
            "700italic": "http://fonts.gstatic.com/s/vollkorn/v8/KNiAlx6phRqXCwnZZG51JAJKKGfqHaYFsRG-T3ceEVo.ttf",
            "900": "http://fonts.gstatic.com/s/vollkorn/v8/IBcUSEL3da6GXw0kfPwtqqCWcynf_cDxXwCLxiixG1c.ttf",
            "900italic": "http://fonts.gstatic.com/s/vollkorn/v8/5fOn_dOVwBIkZpOP3_1I750EAVxt0G0biEntp43Qt6E.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Vollkorn SC",
           "category": "serif",
           "variants": [
            "regular",
            "600",
            "700",
            "900"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v1",
           "lastModified": "2017-11-07",
           "files": {
            "regular": "http://fonts.gstatic.com/s/vollkornsc/v1/HMEVRTum_bgc4D5Z4_TG-KCWcynf_cDxXwCLxiixG1c.ttf",
            "600": "http://fonts.gstatic.com/s/vollkornsc/v1/Z5Dv9CPxH7cf8GgVmzxuCJZ7xm-Bj30Bj2KNdXDzSZg.ttf",
            "700": "http://fonts.gstatic.com/s/vollkornsc/v1/Z5Dv9CPxH7cf8GgVmzxuCHe1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "900": "http://fonts.gstatic.com/s/vollkornsc/v1/Z5Dv9CPxH7cf8GgVmzxuCCenaqEuufTBk9XMKnKmgDA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Voltaire",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/voltaire/v7/WvqBzaGEBbRV-hrahwO2cA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Waiting for the Sunrise",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/waitingforthesunrise/v8/eNfH7kLpF1PZWpsetF-ha9TChrNgrDiT3Zy6yGf3FnM.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Wallpoet",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/wallpoet/v9/hmum4WuBN4A0Z_7367NDIg.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Walter Turncoat",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/walterturncoat/v8/sG9su5g4GXy1KP73cU3hvQplL2YwNeota48DxFlGDUo.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Warnes",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v7",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/warnes/v7/MXG7_Phj4YpzAXxKGItuBw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Wellfleet",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/wellfleet/v5/J5tOx72iFRPgHYpbK9J4XQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Wendy One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v5",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/wendyone/v5/R8CJT2oDXdMk_ZtuHTxoxw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Wire One",
           "category": "sans-serif",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/wireone/v8/sRLhaQOQpWnvXwIx0CycQw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Work Sans",
           "category": "sans-serif",
           "variants": [
            "100",
            "200",
            "300",
            "regular",
            "500",
            "600",
            "700",
            "800",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/worksans/v3/ZAhtNqLaAViKjGLajtuwWaCWcynf_cDxXwCLxiixG1c.ttf",
            "200": "http://fonts.gstatic.com/s/worksans/v3/u_mYNr_qYP37m7vgvmIYZy3USBnSvpkopQaUR-2r7iU.ttf",
            "300": "http://fonts.gstatic.com/s/worksans/v3/FD_Udbezj8EHXbdsqLUply3USBnSvpkopQaUR-2r7iU.ttf",
            "regular": "http://fonts.gstatic.com/s/worksans/v3/zVvigUiMvx7JVEnrJgc-5Q.ttf",
            "500": "http://fonts.gstatic.com/s/worksans/v3/Nbre-U_bp6Xktt8cpgwaJC3USBnSvpkopQaUR-2r7iU.ttf",
            "600": "http://fonts.gstatic.com/s/worksans/v3/z9rX03Xuz9ZNHTMg1_ghGS3USBnSvpkopQaUR-2r7iU.ttf",
            "700": "http://fonts.gstatic.com/s/worksans/v3/4udXuXg54JlPEP5iKO5AmS3USBnSvpkopQaUR-2r7iU.ttf",
            "800": "http://fonts.gstatic.com/s/worksans/v3/IQh-ap2Uqs7kl1YINeeEGi3USBnSvpkopQaUR-2r7iU.ttf",
            "900": "http://fonts.gstatic.com/s/worksans/v3/Hjn0acvjHfjY_vAK9Uc6gi3USBnSvpkopQaUR-2r7iU.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Yanone Kaffeesatz",
           "category": "sans-serif",
           "variants": [
            "200",
            "300",
            "regular",
            "700"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext"
           ],
           "version": "v9",
           "lastModified": "2017-10-10",
           "files": {
            "200": "http://fonts.gstatic.com/s/yanonekaffeesatz/v9/We_iSDqttE3etzfdfhuPRbq92v6XxU4pSv06GI0NsGc.ttf",
            "300": "http://fonts.gstatic.com/s/yanonekaffeesatz/v9/We_iSDqttE3etzfdfhuPRZlIwXPiNoNT_wxzJ2t3mTE.ttf",
            "regular": "http://fonts.gstatic.com/s/yanonekaffeesatz/v9/YDAoLskQQ5MOAgvHUQCcLdXn3cHbFGWU4T2HrSN6JF4.ttf",
            "700": "http://fonts.gstatic.com/s/yanonekaffeesatz/v9/We_iSDqttE3etzfdfhuPRf2R4S6PlKaGXWPfWpHpcl0.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Yantramanav",
           "category": "sans-serif",
           "variants": [
            "100",
            "300",
            "regular",
            "500",
            "700",
            "900"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "100": "http://fonts.gstatic.com/s/yantramanav/v3/Rs1I2PF4Z8GAb6qjgvr8wIAWxXGWZ3yJw6KhWS7MxOk.ttf",
            "300": "http://fonts.gstatic.com/s/yantramanav/v3/HSfbC4Z8I8BZ00wiXeA5bC9-WlPSxbfiI49GsXo3q0g.ttf",
            "regular": "http://fonts.gstatic.com/s/yantramanav/v3/FwdziO-qWAO8pZg8e376kaCWcynf_cDxXwCLxiixG1c.ttf",
            "500": "http://fonts.gstatic.com/s/yantramanav/v3/HSfbC4Z8I8BZ00wiXeA5bMCNfqCYlB_eIx7H1TVXe60.ttf",
            "700": "http://fonts.gstatic.com/s/yantramanav/v3/HSfbC4Z8I8BZ00wiXeA5bHe1Pd76Vl7zRpE7NLJQ7XU.ttf",
            "900": "http://fonts.gstatic.com/s/yantramanav/v3/HSfbC4Z8I8BZ00wiXeA5bCenaqEuufTBk9XMKnKmgDA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Yatra One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin",
            "latin-ext",
            "devanagari"
           ],
           "version": "v4",
           "lastModified": "2017-11-21",
           "files": {
            "regular": "http://fonts.gstatic.com/s/yatraone/v4/ApKQzWF7_vG0Lt5TDqgUvw.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Yellowtail",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v8",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/yellowtail/v8/HLrU6lhCTjXfLZ7X60LcB_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Yeseva One",
           "category": "display",
           "variants": [
            "regular"
           ],
           "subsets": [
            "cyrillic",
            "vietnamese",
            "latin",
            "latin-ext",
            "cyrillic-ext"
           ],
           "version": "v12",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/yesevaone/v12/eenQQxvpzSA80JmisGcgX_esZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Yesteryear",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v6",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/yesteryear/v6/dv09hP_ZrdjVOfZQXKXuZvesZW2xOQ-xsNqO47m55DA.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Yrsa",
           "category": "serif",
           "variants": [
            "300",
            "regular",
            "500",
            "600",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-10",
           "files": {
            "300": "http://fonts.gstatic.com/s/yrsa/v3/YI0C1syzAYpkrPx27UnC2w.ttf",
            "regular": "http://fonts.gstatic.com/s/yrsa/v3/JWX_dCK4_Jq-oqF7r9rFHg.ttf",
            "500": "http://fonts.gstatic.com/s/yrsa/v3/rWuZmBLHIeKRbnfSvWCvYg.ttf",
            "600": "http://fonts.gstatic.com/s/yrsa/v3/1413P-oEfrq-tBIdqnslDQ.ttf",
            "700": "http://fonts.gstatic.com/s/yrsa/v3/iV49zaJV5wyo_4LgxE2yng.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Zeyada",
           "category": "handwriting",
           "variants": [
            "regular"
           ],
           "subsets": [
            "latin"
           ],
           "version": "v7",
           "lastModified": "2017-10-10",
           "files": {
            "regular": "http://fonts.gstatic.com/s/zeyada/v7/hmonmGYYFwqTZQfG2nRswQ.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Zilla Slab",
           "category": "serif",
           "variants": [
            "300",
            "300italic",
            "regular",
            "italic",
            "500",
            "500italic",
            "600",
            "600italic",
            "700",
            "700italic"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-11-21",
           "files": {
            "300": "http://fonts.gstatic.com/s/zillaslab/v3/MIkI-zFTb-IKu6GQ4qfBIUeOrDcLawS7-ssYqLr2Xp4.ttf",
            "300italic": "http://fonts.gstatic.com/s/zillaslab/v3/SlbCHfLtf3uBEqmR9ezZMqcQoVhARpoaILP7amxE_8g.ttf",
            "regular": "http://fonts.gstatic.com/s/zillaslab/v3/GQa6C2kQZDjk1E7wBSIhnPesZW2xOQ-xsNqO47m55DA.ttf",
            "italic": "http://fonts.gstatic.com/s/zillaslab/v3/0uwn9tpUNTyjFGXazfTluC3USBnSvpkopQaUR-2r7iU.ttf",
            "500": "http://fonts.gstatic.com/s/zillaslab/v3/M-lMpg6F7WVOVam88MR7yJp-63r6doWhTEbsfBIRJ7A.ttf",
            "500italic": "http://fonts.gstatic.com/s/zillaslab/v3/SlbCHfLtf3uBEqmR9ezZMpMQuUSAwdHsY8ov_6tk1oA.ttf",
            "600": "http://fonts.gstatic.com/s/zillaslab/v3/idTxEJxWLSyMdm2hH0_fO_pTEJqju4Hz1txDWij77d4.ttf",
            "600italic": "http://fonts.gstatic.com/s/zillaslab/v3/SlbCHfLtf3uBEqmR9ezZMmv8CylhIUtwUiYO7Z2wXbE.ttf",
            "700": "http://fonts.gstatic.com/s/zillaslab/v3/5alS-fi1sAYG-KJydQxv8AJKKGfqHaYFsRG-T3ceEVo.ttf",
            "700italic": "http://fonts.gstatic.com/s/zillaslab/v3/SlbCHfLtf3uBEqmR9ezZMkD2ttfZwueP-QU272T9-k4.ttf"
           }
          },
          {
           "kind": "webfonts#webfont",
           "family": "Zilla Slab Highlight",
           "category": "display",
           "variants": [
            "regular",
            "700"
           ],
           "subsets": [
            "latin",
            "latin-ext"
           ],
           "version": "v3",
           "lastModified": "2017-10-09",
           "files": {
            "regular": "http://fonts.gstatic.com/s/zillaslabhighlight/v3/A1oFQmFZMluFeVEQs3f1ZsRj1XVSCnpi3yrU572D-Ys.ttf",
            "700": "http://fonts.gstatic.com/s/zillaslabhighlight/v3/4GC1z5cbR6tbZfervoVHHDJanj6ILIntqP8io1sy9nk.ttf"
           }
          }
         ]
        }';
        $google_fonts_decoded = json_decode($google_fonts_json, true);
        $hyperon_edgtf_fonts_array = $google_fonts_decoded['items'];
    }

    add_action('after_setup_theme', 'hyperon_edgtf_init_google_fonts_array');
}