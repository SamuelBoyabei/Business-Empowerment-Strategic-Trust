<?php
// Define your marketing ads (Image URL, Alt Text, and a unique Heading)
$ads = [
    [
        "image" => "https://unsplash.com",
        "title" => "Grow Your Business Online",
        "desc"  => "Get 30% off our premier SEO and social media marketing packages this month!"
    ],
    [
        "image" => "https://unsplash.com",
        "title" => "Professional Web Design",
        "desc"  => "Convert visitors into loyal customers with a custom responsive website built for speed."
    ],
    [
        "image" => "https://unsplash.com",
        "title" => "Targeted PPC Campaigns",
        "desc"  => "Stop wasting money on bad ads. Let our specialists optimize your Google and Meta ROI."
    ]
];

// Pick a random ad to display on page load
$random_key = array_rand($ads);
$current_ad = $ads[$random_key];
?>