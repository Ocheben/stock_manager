INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Enter Hybrid_Auth::initialize()
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth::initialize(). PHP version: 7.1.1
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth::initialize(). Hybrid_Auth version: 2.9.2
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth::initialize(). Hybrid_Auth called from: http://ci.dev/sma/social_auth/login/Facebook
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- PHP session.name diff from default PHPSESSID. http://php.net/manual/en/session.configuration.php#ini.session.name.
DEBUG -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth initialize. dump used config:  -- a:10:{s:14:"Hauth_base_url";s:20:"social_auth/endpoint";s:9:"providers";a:10:{s:6:"Google";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:2:"id";s:72:"968829059525-qu9dk9l3e4docpnsb2nm8qj47ipvtjb8.apps.googleusercontent.com";s:6:"secret";s:24:"q8rj_s8bG7n9aK93tyTRtz8C";}}s:8:"Facebook";a:3:{s:7:"enabled";b:1;s:4:"keys";a:2:{s:2:"id";s:15:"238339393314375";s:6:"secret";s:32:"3c55baf6c338c0b461a313f7f452b517";}s:5:"scope";s:36:"email, public_profile, user_birthday";}s:7:"Twitter";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:3:"key";s:0:"";s:6:"secret";s:0:"";}}s:5:"Yahoo";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:2:"id";s:0:"";s:6:"secret";s:0:"";}}s:4:"Live";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:2:"id";s:0:"";s:6:"secret";s:0:"";}}s:7:"MySpace";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:3:"key";s:0:"";s:6:"secret";s:0:"";}}s:6:"OpenID";a:1:{s:7:"enabled";b:0;}s:8:"LinkedIn";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:3:"key";s:0:"";s:6:"secret";s:0:"";}}s:10:"Foursquare";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:2:"id";s:0:"";s:6:"secret";s:0:"";}}s:3:"AOL";a:1:{s:7:"enabled";b:0;}}s:10:"debug_mode";b:1;s:10:"debug_file";s:71:"/Users/Saleem/Desktop/Projects/ci/sma/app/logs/hybridauth2017-07-10.php";s:8:"base_url";s:48:"http://ci.dev/sma/index.php/social_auth/endpoint";s:9:"path_base";s:72:"/Users/Saleem/Desktop/Projects/ci/sma/app/third_party/hybridauth/Hybrid/";s:11:"path_vendor";b:0;s:14:"path_libraries";s:83:"/Users/Saleem/Desktop/Projects/ci/sma/app/third_party/hybridauth/Hybrid/thirdparty/";s:14:"path_resources";s:82:"/Users/Saleem/Desktop/Projects/ci/sma/app/third_party/hybridauth/Hybrid/resources/";s:14:"path_providers";s:82:"/Users/Saleem/Desktop/Projects/ci/sma/app/third_party/hybridauth/Hybrid/Providers/";}
DEBUG -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth initialize. dump current session:  -- 
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth initialize: check if any error is stored on the endpoint...
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth initialize: no error found. initialization succeed.
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Enter Hybrid_Auth::authenticate( Facebook )
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth::authenticate( Facebook ), User not connected to the provider. Try to authenticate..
DEBUG -- ::1 -- 2017-07-10T07:53:19+00:00 -- Enter Hybrid_Auth::setup( Facebook ) -- 
DEBUG -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth::setup( Facebook ), no params given. Trying to get the stored for this provider. -- 
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth::setup( Facebook ), no stored params found for this provider. Initialize a new one for new session
DEBUG -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth::setup( Facebook ). HybridAuth Callback URL set to:  -- http://ci.dev/sma/social_auth/login/Facebook
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Enter Hybrid_Provider_Adapter::factory( Facebook )
DEBUG -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Provider_Model::__construct( Facebook ) initialized. dump current adapter instance:  -- O:25:"Hybrid_Providers_Facebook":9:{s:5:"scope";a:3:{i:0;s:5:"email";i:1;s:14:"public_profile";i:2;s:13:"user_birthday";}s:3:"api";O:17:"Facebook\Facebook":9:{s:6:" * app";C:20:"Facebook\FacebookApp":48:{238339393314375|3c55baf6c338c0b461a313f7f452b517}s:9:" * client";O:23:"Facebook\FacebookClient":2:{s:17:" * enableBetaMode";b:0;s:20:" * httpClientHandler";O:43:"Facebook\HttpClients\FacebookCurlHttpClient":4:{s:19:" * curlErrorMessage";s:0:"";s:16:" * curlErrorCode";i:0;s:14:" * rawResponse";N;s:15:" * facebookCurl";O:33:"Facebook\HttpClients\FacebookCurl":1:{s:7:" * curl";N;}}}s:15:" * oAuth2Client";N;s:22:" * urlDetectionHandler";O:40:"Facebook\Url\FacebookUrlDetectionHandler":0:{}s:30:" * pseudoRandomStringGenerator";O:66:"Facebook\PseudoRandomString\RandomBytesPseudoRandomStringGenerator":0:{}s:21:" * defaultAccessToken";N;s:22:" * defaultGraphVersion";s:4:"v2.8";s:24:" * persistentDataHandler";O:60:"Facebook\PersistentData\FacebookSessionPersistentDataHandler":1:{s:16:" * sessionPrefix";s:6:"FBRLH_";}s:15:" * lastResponse";N;}s:11:"useSafeUrls";b:1;s:10:"providerId";s:8:"Facebook";s:6:"config";a:3:{s:7:"enabled";b:1;s:4:"keys";a:2:{s:2:"id";s:15:"238339393314375";s:6:"secret";s:32:"3c55baf6c338c0b461a313f7f452b517";}s:5:"scope";s:36:"email, public_profile, user_birthday";}s:6:"params";a:1:{s:15:"hauth_return_to";s:44:"http://ci.dev/sma/social_auth/login/Facebook";}s:8:"endpoint";N;s:4:"user";O:11:"Hybrid_User":3:{s:10:"providerId";s:8:"Facebook";s:9:"timestamp";i:1499673199;s:7:"profile";O:19:"Hybrid_User_Profile":24:{s:10:"identifier";N;s:10:"webSiteURL";N;s:10:"profileURL";N;s:8:"photoURL";N;s:11:"displayName";N;s:11:"description";N;s:9:"firstName";N;s:8:"lastName";N;s:6:"gender";N;s:8:"language";N;s:3:"age";N;s:8:"birthDay";N;s:10:"birthMonth";N;s:9:"birthYear";N;s:5:"email";N;s:13:"emailVerified";N;s:5:"phone";N;s:7:"address";N;s:7:"country";N;s:6:"region";N;s:4:"city";N;s:3:"zip";N;s:9:"job_title";N;s:17:"organization_name";N;}}s:10:"compressed";b:0;}
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Enter Hybrid_Provider_Adapter::login( Facebook ) 
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Enter [Facebook]::logout()
DEBUG -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Provider_Adapter::login( Facebook ), redirect the user to login_start URL. -- 
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Enter Hybrid_Auth::redirect( http://ci.dev/sma/index.php/social_auth/endpoint?hauth.start=Facebook&hauth.time=1499673199, PHP )
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Enter Hybrid_Auth::initialize()
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth::initialize(). PHP version: 7.1.1
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth::initialize(). Hybrid_Auth version: 2.9.2
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth::initialize(). Hybrid_Auth called from: http://ci.dev/sma/index.php/social_auth/endpoint?hauth.start=Facebook&hauth.time=1499673199
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- PHP session.name diff from default PHPSESSID. http://php.net/manual/en/session.configuration.php#ini.session.name.
DEBUG -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth initialize. dump used config:  -- a:10:{s:14:"Hauth_base_url";s:20:"social_auth/endpoint";s:9:"providers";a:10:{s:6:"Google";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:2:"id";s:72:"968829059525-qu9dk9l3e4docpnsb2nm8qj47ipvtjb8.apps.googleusercontent.com";s:6:"secret";s:24:"q8rj_s8bG7n9aK93tyTRtz8C";}}s:8:"Facebook";a:3:{s:7:"enabled";b:1;s:4:"keys";a:2:{s:2:"id";s:15:"238339393314375";s:6:"secret";s:32:"3c55baf6c338c0b461a313f7f452b517";}s:5:"scope";s:36:"email, public_profile, user_birthday";}s:7:"Twitter";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:3:"key";s:0:"";s:6:"secret";s:0:"";}}s:5:"Yahoo";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:2:"id";s:0:"";s:6:"secret";s:0:"";}}s:4:"Live";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:2:"id";s:0:"";s:6:"secret";s:0:"";}}s:7:"MySpace";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:3:"key";s:0:"";s:6:"secret";s:0:"";}}s:6:"OpenID";a:1:{s:7:"enabled";b:0;}s:8:"LinkedIn";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:3:"key";s:0:"";s:6:"secret";s:0:"";}}s:10:"Foursquare";a:2:{s:7:"enabled";b:0;s:4:"keys";a:2:{s:2:"id";s:0:"";s:6:"secret";s:0:"";}}s:3:"AOL";a:1:{s:7:"enabled";b:0;}}s:10:"debug_mode";b:1;s:10:"debug_file";s:71:"/Users/Saleem/Desktop/Projects/ci/sma/app/logs/hybridauth2017-07-10.php";s:8:"base_url";s:48:"http://ci.dev/sma/index.php/social_auth/endpoint";s:9:"path_base";s:72:"/Users/Saleem/Desktop/Projects/ci/sma/app/third_party/hybridauth/Hybrid/";s:11:"path_vendor";b:0;s:14:"path_libraries";s:83:"/Users/Saleem/Desktop/Projects/ci/sma/app/third_party/hybridauth/Hybrid/thirdparty/";s:14:"path_resources";s:82:"/Users/Saleem/Desktop/Projects/ci/sma/app/third_party/hybridauth/Hybrid/resources/";s:14:"path_providers";s:82:"/Users/Saleem/Desktop/Projects/ci/sma/app/third_party/hybridauth/Hybrid/Providers/";}
DEBUG -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth initialize. dump current session:  -- a:3:{s:38:"hauth_session.facebook.hauth_return_to";s:52:"s:44:"http://ci.dev/sma/social_auth/login/Facebook";";s:37:"hauth_session.facebook.hauth_endpoint";s:76:"s:68:"http://ci.dev/sma/index.php/social_auth/endpoint?hauth_done=Facebook";";s:41:"hauth_session.facebook.id_provider_params";s:391:"a:5:{s:15:"hauth_return_to";s:44:"http://ci.dev/sma/social_auth/login/Facebook";s:11:"hauth_token";s:40:"0fdabc5e9fb07f05dc416424e2ba26ca760c7283";s:10:"hauth_time";i:1499673199;s:11:"login_start";s:91:"http://ci.dev/sma/index.php/social_auth/endpoint?hauth.start=Facebook&hauth.time=1499673199";s:10:"login_done";s:68:"http://ci.dev/sma/index.php/social_auth/endpoint?hauth_done=Facebook";}";}
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth initialize: check if any error is stored on the endpoint...
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth initialize: no error found. initialization succeed.
DEBUG -- ::1 -- 2017-07-10T07:53:19+00:00 -- Enter Hybrid_Auth::setup( Facebook ) -- 
DEBUG -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Auth::setup( Facebook ), no params given. Trying to get the stored for this provider. -- Array
(
    [hauth_return_to] => http://ci.dev/sma/social_auth/login/Facebook
    [hauth_token] => 0fdabc5e9fb07f05dc416424e2ba26ca760c7283
    [hauth_time] => 1499673199
    [login_start] => http://ci.dev/sma/index.php/social_auth/endpoint?hauth.start=Facebook&hauth.time=1499673199
    [login_done] => http://ci.dev/sma/index.php/social_auth/endpoint?hauth_done=Facebook
)

INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Enter Hybrid_Provider_Adapter::factory( Facebook )
DEBUG -- ::1 -- 2017-07-10T07:53:19+00:00 -- Hybrid_Provider_Model::__construct( Facebook ) initialized. dump current adapter instance:  -- O:25:"Hybrid_Providers_Facebook":9:{s:5:"scope";a:3:{i:0;s:5:"email";i:1;s:14:"public_profile";i:2;s:13:"user_birthday";}s:3:"api";O:17:"Facebook\Facebook":9:{s:6:" * app";C:20:"Facebook\FacebookApp":48:{238339393314375|3c55baf6c338c0b461a313f7f452b517}s:9:" * client";O:23:"Facebook\FacebookClient":2:{s:17:" * enableBetaMode";b:0;s:20:" * httpClientHandler";O:43:"Facebook\HttpClients\FacebookCurlHttpClient":4:{s:19:" * curlErrorMessage";s:0:"";s:16:" * curlErrorCode";i:0;s:14:" * rawResponse";N;s:15:" * facebookCurl";O:33:"Facebook\HttpClients\FacebookCurl":1:{s:7:" * curl";N;}}}s:15:" * oAuth2Client";N;s:22:" * urlDetectionHandler";O:40:"Facebook\Url\FacebookUrlDetectionHandler":0:{}s:30:" * pseudoRandomStringGenerator";O:66:"Facebook\PseudoRandomString\RandomBytesPseudoRandomStringGenerator":0:{}s:21:" * defaultAccessToken";N;s:22:" * defaultGraphVersion";s:4:"v2.8";s:24:" * persistentDataHandler";O:60:"Facebook\PersistentData\FacebookSessionPersistentDataHandler":1:{s:16:" * sessionPrefix";s:6:"FBRLH_";}s:15:" * lastResponse";N;}s:11:"useSafeUrls";b:1;s:10:"providerId";s:8:"Facebook";s:6:"config";a:3:{s:7:"enabled";b:1;s:4:"keys";a:2:{s:2:"id";s:15:"238339393314375";s:6:"secret";s:32:"3c55baf6c338c0b461a313f7f452b517";}s:5:"scope";s:36:"email, public_profile, user_birthday";}s:6:"params";a:5:{s:15:"hauth_return_to";s:44:"http://ci.dev/sma/social_auth/login/Facebook";s:11:"hauth_token";s:40:"0fdabc5e9fb07f05dc416424e2ba26ca760c7283";s:10:"hauth_time";i:1499673199;s:11:"login_start";s:91:"http://ci.dev/sma/index.php/social_auth/endpoint?hauth.start=Facebook&hauth.time=1499673199";s:10:"login_done";s:68:"http://ci.dev/sma/index.php/social_auth/endpoint?hauth_done=Facebook";}s:8:"endpoint";s:68:"http://ci.dev/sma/index.php/social_auth/endpoint?hauth_done=Facebook";s:4:"user";O:11:"Hybrid_User":3:{s:10:"providerId";s:8:"Facebook";s:9:"timestamp";i:1499673199;s:7:"profile";O:19:"Hybrid_User_Profile":24:{s:10:"identifier";N;s:10:"webSiteURL";N;s:10:"profileURL";N;s:8:"photoURL";N;s:11:"displayName";N;s:11:"description";N;s:9:"firstName";N;s:8:"lastName";N;s:6:"gender";N;s:8:"language";N;s:3:"age";N;s:8:"birthDay";N;s:10:"birthMonth";N;s:9:"birthYear";N;s:5:"email";N;s:13:"emailVerified";N;s:5:"phone";N;s:7:"address";N;s:7:"country";N;s:6:"region";N;s:4:"city";N;s:3:"zip";N;s:9:"job_title";N;s:17:"organization_name";N;}}s:10:"compressed";b:0;}
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Endpoint: call adapter [Facebook] loginBegin()
INFO -- ::1 -- 2017-07-10T07:53:19+00:00 -- Enter Hybrid_Auth::redirect( https://www.facebook.com/v2.8/dialog/oauth?auth_type=rerequest&client_id=238339393314375&state=d0f459f2d37b5dc97e1e3a10dc8e4a09&response_type=code&sdk=php-sdk-5.4.4&redirect_uri=http%3A%2F%2Fci.dev%2Fsma%2Findex.php%2Fsocial_auth%2Fendpoint%3Fhauth_done%3DFacebook&scope=email%2Cpublic_profile%2Cuser_birthday, PHP )
