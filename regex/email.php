<pre><?php

function checkPattern($pattern, $array) {
    echo "Pattern matched " . count(preg_grep($pattern, $array))
    . " of " . count($array) . " e-mails.";
    echo PHP_EOL;
}

$pattern = '#^[A-z0-9+-._]+@[A-z0-9-]+\.[A-z0-9-\.]+$#';

$valid_emails = [
    'thisisreal@somewhere.net',
    'also.valid@something.cx',
    'this_could_be_legit@gmail.com',
    'really.long.username.here@abc123.agency',
    '4otfhouh2ougfhf@fihweofuh.com',
    'a.b.c.d.e.f.g@h.i.j.j.k.l.m.n.o.p.q.r.s',
    '123@123.com',
    'abc@abc.com',
    '1__@1__.com',
];

$invalid_emails = [
    '!shouldnotwork@no.com',
    'alsobroken@',
    '',
    '@',
    '123',
    'null',
    'no @ no . com',
    'no@no. com',
    'no @no.com',
    'typo@typo@typo.com',
    'jeff[at]gmail[dot]com',
    'nope@@somewhere.com',
    'someonesomewhere.net',
];

echo 'Using pattern:' . PHP_EOL . htmlentities($pattern) . PHP_EOL;
echo PHP_EOL;

echo 'Checking valid e-mails:' . PHP_EOL;
checkPattern($pattern, $valid_emails);
echo PHP_EOL;

echo 'Checking invalid e-mails:' . PHP_EOL;
checkPattern($pattern, $invalid_emails);
echo PHP_EOL;