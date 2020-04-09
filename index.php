<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style.css">
	<title>WHY PATRICK KU IS SINGLE</title>
</head>

<body>

    <div style="border: 2px yellow solid;"><img src="https://i.ibb.co/VWfMwL1/Screenshot-20200407-123408.png"></div>
    <h1>WHY PATRICK KU IS SINGLE</h1>
    <h2>The Official PATRICK KU IS SINGLE Website!</h2>
    <h3><a href="https://forms.gle/88z792MgorAgzVnZ6">Click Here To Take The Survey!</a></h3>
	<h2>He is single because:</h2>
	<p><ul>
        <?php
        require_once __DIR__ . '/vendor/autoload.php';
        use GuzzleHttp\Client;



        function getClient() {
            $client = new Google_Client(['verify' => false]);
            $guzzleClient = new Client(['verify' => false]);
            $client->setApplicationName('Google Sheets API PHP Quickstart');
            $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
            $client->setAuthConfig('credentials.json');
            $client->setAccessType('offline');
            $client->setPrompt('select_account consent');

            // Load previously authorized token from a file, if it exists.
            // The file token.json stores the user's access and refresh tokens, and is
            // created automatically when the authorization flow completes for the first
            // time.
            $tokenPath = 'token.json';
            if (file_exists($tokenPath)) {
                $accessToken = json_decode(file_get_contents($tokenPath), true);
                $client->setAccessToken($accessToken);
            }

            // If there is no previous token or it's expired.
            if ($client->isAccessTokenExpired()) {
                // Refresh the token if possible, else fetch a new one.
                if ($client->getRefreshToken()) {
                    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                } else {
                    // Request authorization from the user.
                    $authUrl = $client->createAuthUrl();
                    printf("Open the following link in your browser:\n%s\n", $authUrl);
                    print 'Enter verification code: ';
                    $authCode = trim(fgets(STDIN));

                    // Exchange authorization code for an access token.
                    $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
                    $client->setAccessToken($accessToken);

                    // Check to see if there was an error.
                    if (array_key_exists('error', $accessToken)) {
                        throw new Exception(join(', ', $accessToken));
                    }
                }
                // Save the token to a file.
                if (!file_exists(dirname($tokenPath))) {
                    mkdir(dirname($tokenPath), 0700, true);
                }
                file_put_contents($tokenPath, json_encode($client->getAccessToken()));
            }
            return $client;
        }

        $client = getClient();
        $service = new Google_Service_Sheets($client);
        $spreadsheetId = '1zUb7tIO-kyGH1MdjRrf9MbcXzI_SGTYAkyKTtt9qnJI';
        $range = 'Class Data!D2:D102';
        $response;

        $response = $service->spreadsheets_values->get($spreadsheetId, $range);


        $numRows = $response->getValues() != null ? count($response->getValues()) : 0;
        $values = $response->getValues();
        for($i = 0; $i < $numRows; $i++){
            echo '<li>' . $values[$i] . '</li>';
        }



        ?>

        ?>
		<li>Patrick is single because he doesn't have a girlfriend</li>
		<li>Who is Patrick?</li>
		<li>Because he doesn't kiss his homies goodnight.</li>
		<li>Patrick Ku needs to turn in this semester's tuition payment</li>
		<li>Because he hasn't met enough people. Statistically, the best way to find a partner is to meet as many people as possible.</li>
		<li>Yes</li>
		<li>Patrick is single because he doesn't have a girlfriend or a boyfriend</li>
		<li>He puts the milk in the bowl before the cereal.</li>
		<li>He gave me a 20/100 for the cereal answer.</li>
		<li>Those hoes don't deserve Patrick</li>
		<li>Girls don't like Heelys</li>
		<li>because he's sending out forms to his friends instead of talking to girls</li>
		<li>Because he doesn't interact enough with them</li>
		<li>Because you never listen to what someone says and don't try</li>
		<li>Beats the hell outta me, he can get it any time he pleases!</li>
		<li>He needs to get out there my dude</li>
		<li>because he's a furry</li>
		<li>Patrick is single because of the patriarchal prejudices and rules beset upon him by society. Also big gay.</li>
		<li>Because your butter lover's popcorn box analysis was subpar</li>
		<li>Shit</li>
		<li>Probably because he's socially awkward, and a wee bit shy</li>
		<li>Because you do not approach women you are interested in and when you do you fail to engage or relate with them genuinely</li>
		<li>He lives in Wolf Ridge</li>
	</ul></p>
</body>
</html>

