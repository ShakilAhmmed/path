<?php

namespace ShakilAhmmed\Path;

class Path
{
    static private $division = [
        "dhaka" => [
            "name" => "Dhaka",
            "bn" => "ঢাকা",
        ],
        "barisal" => [
            "name" => "Barisal",
            "bn" => "বরিশাল",
        ],
        "chittagong" => [
            "name" => "Chittagong",
            "bn" => "চট্টগ্রাম",
        ],
        "khulna" => [
            "name" => "Khulna",
            "bn" => "খুলনা",
        ],
        "mymensingh" => [
            "name" => "Mymensingh",
            "bn" => "ময়মনসিংহ",
        ],
        "rajshahi" => [
            "name" => "Rajshahi",
            "bn" => "রাজশাহী",
        ],
        "sylhet" => [
            "name" => "Sylhet",
            "bn" => "সিলেট",
        ],
        "rangpur" => [
            "name" => "Rangpur",
            "bn" => "রংপুর",
        ],
    ];

    static private $district = [
        "dhaka" => [
            "dhaka" => [
                "name" => "Dhaka",
                "bn" => "ঢাকা",
                "upzillas" => [
                    [
                        "name" => "Savar",
                        "bn" => "সাভার",
                    ],
                    [
                        "name" => "Dhamrai",
                        "bn" => "ধামরাই",
                    ],
                    [
                        "name" => "Keraniganj",
                        "bn" => "কেরাণীগঞ্জ",
                    ],
                    [
                        "name" => "Nawabganj",
                        "bn" => "নবাবগঞ্জ",
                    ],
                    [
                        "name" => "Dohar",
                        "bn" => "দোহার",
                    ],
                ]
            ],
            "ghazipur" => [
                "name" => "Ghazipur",
                "bn" => "গাজীপুর",
                "upzillas" => [
                    [
                        "name" => "Kaliganj",
                        "bn" => "কালীগঞ্জ",
                    ],
                    [
                        "name" => "Kaliakair",
                        "bn" => "কালিয়াকৈর",
                    ],
                    [
                        "name" => "Kapasia",
                        "bn" => "কাপাসিয়া",
                    ],
                    [
                        "name" => "Ghazipur Sadar",
                        "bn" => "গাজীপুর সদর",
                    ],
                    [
                        "name" => "Sreepur",
                        "bn" => "শ্রীপুর",
                    ],
                ]
            ],
            "kishoreganj" => [
                "name" => "Kishoreganj",
                "bn" => "কিশোরগঞ্জ",
                "upzillas" => [
                    [
                        "name" => "Itna",
                        "bn" => "ইটনা",
                    ],
                    [
                        "name" => "Katiadi",
                        "bn" => "কটিয়াদী",
                    ],
                    [
                        "name" => "Bhairab",
                        "bn" => "ভৈরব",
                    ],
                    [
                        "name" => "Tarail",
                        "bn" => "তাড়াইল",
                    ],
                    [
                        "name" => "Hossainpur",
                        "bn" => "হোসেনপুর",
                    ],
                    [
                        "name" => "Pakundia",
                        "bn" => "পাকুন্দিয়া",
                    ],
                    [
                        "name" => "Kuliarchar",
                        "bn" => "কুলিয়ারচর",
                    ],
                    [
                        "name" => "Kishoreganj sadar",
                        "bn" => "কিশোরগঞ্জ সদর",
                    ],
                    [
                        "name" => "Karimgonj",
                        "bn" => "করিমগঞ্জ",
                    ],
                    [
                        "name" => "Bajitpur",
                        "bn" => "বাজিতপুর",
                    ],
                    [
                        "name" => "Austagram",
                        "bn" => "অষ্টগ্রাম",
                    ],
                    [
                        "name" => "Mithamoin",
                        "bn" => "মিঠামইন",
                    ],
                    [
                        "name" => "Nikli",
                        "bn" => "নিকলী",
                    ],
                ]
            ],
            "manikganj" => [
                "name" => "Manikganj",
                "bn" => "মানিকগঞ্জ",
                "upzillas" => [
                    [
                        "name" => "Harirampur",
                        "bn" => "হরিরামপুর",
                    ],
                    [
                        "name" => "Saturia",
                        "bn" => "সাটুরিয়া",
                    ],
                    [
                        "name" => "Manikganj Sadar",
                        "bn" => "মানিকগঞ্জ সদর",
                    ],
                    [
                        "name" => "Gior",
                        "bn" => "ঘিওর",
                    ],
                    [
                        "name" => "Shibaloy",
                        "bn" => "শিবালয়",
                    ],
                    [
                        "name" => "Doulatpur",
                        "bn" => "দৌলতপুর",
                    ],
                    [
                        "name" => "Singiar",
                        "bn" => "সিংগাইর",
                    ],
                ]
            ],
            "munshiganj" => [
                "name" => "Munshiganj",
                "bn" => "মুন্সিগঞ্জ",
                "upzillas" => [
                    [
                        "name" => "Munshiganj Sadar",
                        "bn" => "মুন্সিগঞ্জ সদর",
                    ],
                    [
                        "name" => "Sreenagar",
                        "bn" => "শ্রীনগর",
                    ],
                    [
                        "name" => "Sirajdikhan",
                        "bn" => "সিরাজদিখান",
                    ],
                    [
                        "name" => "Louhajanj",
                        "bn" => "লৌহজং",
                    ],
                    [
                        "name" => "Gajaria",
                        "bn" => "গজারিয়া",
                    ],
                    [
                        "name" => "Tongibari",
                        "bn" => "টংগীবাড়ি",
                    ],
                ]
            ],
            "narayanganj" => [
                "name" => "Narayanganj",
                "bn" => "নারায়ণগঞ্জ",
                "upzillas" => [
                    [
                        "name" => "Araihazar",
                        "bn" => "আড়াইহাজার",
                    ],
                    [
                        "name" => "Bandar",
                        "bn" => "বন্দর",
                    ],
                    [
                        "name" => "Narayanganj Sadar",
                        "bn" => "নারায়নগঞ্জ সদর",
                    ],
                    [
                        "name" => "Rupganj",
                        "bn" => "রূপগঞ্জ",
                    ],
                    [
                        "name" => "Sonargaon",
                        "bn" => "সোনারগাঁ",
                    ],
                ]
            ],
            "narsingdi" => [
                "name" => "Narsingdi",
                "bn" => "নরসিংদি",
                "upzillas" => [
                    [
                        "name" => "Belabo",
                        "bn" => "বেলাবো",
                    ],
                    [
                        "name" => "Monohardi",
                        "bn" => "মনোহরদী",
                    ],
                    [
                        "name" => "Narsingdi Sadar",
                        "bn" => "নরসিংদী",
                    ],
                    [
                        "name" => "Palash",
                        "bn" => "পলাশ",
                    ],
                    [
                        "name" => "Raipura",
                        "bn" => "রায়পুরা",
                    ],
                    [
                        "name" => "Shibpur",
                        "bn" => "শিবপুর",
                    ],
                ]
            ],
            "tangail" => [
                "name" => "Tangail",
                "bn" => "টাঙ্গাইল",
                "upzillas" => [
                    [
                        "name" => "Basail",
                        "bn" => "বাসাইল",
                    ],
                    [
                        "name" => "Bhuapur",
                        "bn" => "ভুয়াপুর",
                    ],
                    [
                        "name" => "Delduar",
                        "bn" => "দেলদুয়ার",
                    ],
                    [
                        "name" => "Ghatail",
                        "bn" => "ঘাটাইল",
                    ],
                    [
                        "name" => "Gopalpur",
                        "bn" => "গোপালপুর",
                    ],
                    [
                        "name" => "Madhupur",
                        "bn" => "মধুপুর",
                    ],
                    [
                        "name" => "Mirzapur",
                        "bn" => "মির্জাপুর",
                    ],
                    [
                        "name" => "Nagarpur",
                        "bn" => "নাগরপুর",
                    ],
                    [
                        "name" => "Sakhipur",
                        "bn" => "সখিপুর",
                    ],
                    [
                        "name" => "Tangail Sadar",
                        "bn" => "টাঙ্গাইল সদর",
                    ],
                    [
                        "name" => "Kalihati",
                        "bn" => "কালিহাতী",
                    ],
                    [
                        "name" => "Dhanbari",
                        "bn" => "ধনবাড়ী",
                    ],
                ]
            ],
            "faridpur" => [
                "name" => "Faridpur",
                "bn" => "ফরিদপুর",
                "upzillas" => [
                    [
                        "name" => "Faridpur Sadar",
                        "bn" => "ফরিদপুর সদর",
                    ],
                    [
                        "name" => "Alfadanga",
                        "bn" => "আলফাডাঙ্গা",
                    ],
                    [
                        "name" => "Boalmari",
                        "bn" => "বোয়ালমারী",
                    ],
                    [
                        "name" => "Sadarpur",
                        "bn" => "সদরপুর",
                    ],
                    [
                        "name" => "Nagarkanda",
                        "bn" => "নগরকান্দা",
                    ],
                    [
                        "name" => "Bhanga",
                        "bn" => "ভাঙ্গা",
                    ],
                    [
                        "name" => "Charbhadrasan",
                        "bn" => "চরভদ্রাসন",
                    ],
                    [
                        "name" => "Madhukhali",
                        "bn" => "মধুখালী",
                    ],
                    [
                        "name" => "Saltha",
                        "bn" => "সালথা",
                    ],
                ]
            ],
            "gopalganj" => [
                "name" => "Gopalganj",
                "bn" => "গোপালগঞ্জ",
                "upzillas" => [
                    [
                        "name" => "Gopalganj Sadar",
                        "bn" => "গোপালগঞ্জ সদর",
                    ],
                    [
                        "name" => "Kashiani",
                        "bn" => "কাশিয়ানী",
                    ],
                    [
                        "name" => "Tungipara",
                        "bn" => "টুংগীপাড়া",
                    ],
                    [
                        "name" => "Kotalipara",
                        "bn" => "কোটালীপাড়া",
                    ],
                    [
                        "name" => "Muksudpur",
                        "bn" => "মুকসুদপুর",
                    ],
                ]
            ],
            "madaripur" => [
                "name" => "Madaripur",
                "bn" => "মাদারিপুর",
                "upzillas" => [
                    [
                        "name" => "Madaripur Sadar",
                        "bn" => "মাদারীপুর সদর",
                    ],
                    [
                        "name" => "Shibchar",
                        "bn" => "শিবচর",
                    ],
                    [
                        "name" => "Kalkini",
                        "bn" => "কালকিনি",
                    ],
                    [
                        "name" => "Rajoir",
                        "bn" => "রাজৈর",
                    ],
                    [
                        "name" => "Dasar",
                        "bn" => "ডাসার",
                    ],
                ]
            ],
            "rajbari" => [
                "name" => "Rajbari",
                "bn" => "রাজবাড়ি",
                "upzillas" => [
                    [
                        "name" => "Rajbari Sadar",
                        "bn" => "রাজবাড়ী সদর",
                    ],
                    [
                        "name" => "Goalanda",
                        "bn" => "গোয়ালন্দ",
                    ],
                    [
                        "name" => "Pangsa",
                        "bn" => "পাংশা",
                    ],
                    [
                        "name" => "Baliakandi",
                        "bn" => "বালিয়াকান্দি",
                    ],
                    [
                        "name" => "Kalukhali",
                        "bn" => "কালুখালী",
                    ],
                ]
            ],
            "shariatpur" => [
                "name" => "Shariatpur",
                "bn" => "শরিয়তপুর",
                "upzillas" => [
                    [
                        "name" => "Shariatpur Sadar",
                        "bn" => "শরিয়তপুর সদর",
                    ],
                    [
                        "name" => "Naria",
                        "bn" => "নড়িয়া",
                    ],
                    [
                        "name" => "Zajira",
                        "bn" => "জাজিরা",
                    ],
                    [
                        "name" => "Gosairhat",
                        "bn" => "গোসাইরহাট",
                    ],
                    [
                        "name" => "Bhedarganj",
                        "bn" => "ভেদরগঞ্জ",
                    ],
                    [
                        "name" => "Damudya",
                        "bn" => "ডামুড্যা",
                    ],
                ],
            ],
        ],
        "barisal" => [
            "barguna" => [
                "name" => "Barguna",
                "bn" => "বরগুনা",
                "upzillas" => [
                    [
                        "name" => "Amtali",
                        "bn" => "আমতলী"
                    ],
                    [
                        "name" => "Barguna Sadar",
                        "bn" => "বরগুনা সদর"
                    ],
                    [
                        "name" => "Betagi",
                        "bn" => "বেতাগী উপজেলা"
                    ],
                    [
                        "name" => "Bamna",
                        "bn" => "বামনা"
                    ],
                    [
                        "name" => "Pathorghata",
                        "bn" => "পাথরঘাটা"
                    ],
                    [
                        "name" => "Taltali",
                        "bn" => "তালতলি"
                    ],
                ]
            ],
            "barisal" => [
                "name" => "Barisal",
                "bn" => "বরিশাল",
                "upzillas" => [
                    [
                        "name" => "Barishal Sadar",
                        "bn" => "বরিশাল সদর"
                    ],
                    [
                        "name" => "Bakerganj",
                        "bn" => "বাকেরগঞ্জ"
                    ],
                    [
                        "name" => "Babuganj",
                        "bn" => "বাবুগঞ্জ"
                    ],
                    [
                        "name" => "Wazirpur",
                        "bn" => "উজিরপুর"
                    ],
                    [
                        "name" => "Banaripara",
                        "bn" => "বানারীপাড়া"
                    ],
                    [
                        "name" => "Gournadi",
                        "bn" => "গৌরনদী"
                    ],
                    [
                        "name" => "Agailjhara",
                        "bn" => "আগৈলঝাড়া"
                    ],
                    [
                        "name" => "Mehendiganj",
                        "bn" => "মেহেন্দিগঞ্জ"
                    ],
                    [
                        "name" => "Muladi",
                        "bn" => "মুলাদী"
                    ],
                    [
                        "name" => "Hizla",
                        "bn" => "হিজলা"
                    ],
                ]
            ],
            "bhola" => [
                "name" => "Bhola",
                "bn" => "ভোলা",
                "upzillas" => [
                    [
                        "name" => "Bhola Sadar",
                        "bn" => "ভোলা সদর",
                    ],
                    [
                        "name" => "Borhanuddin",
                        "bn" => "বোরহান উদ্দিন",
                    ],
                    [
                        "name" => "Charfesson",
                        "bn" => "চরফ্যাশন",
                    ],
                    [
                        "name" => "Doulatkhan",
                        "bn" => "দৌলতখান",
                    ],
                    [
                        "name" => "Monpura",
                        "bn" => "মনপুরা",
                    ],
                    [
                        "name" => "Tazumuddin",
                        "bn" => "তজুমদ্দিন",
                    ],
                    [
                        "name" => "Lalmohan",
                        "bn" => "লালমোহন",
                    ],
                ]
            ],
            "jhalokati" => [
                "name" => "Jhalokati",
                "bn" => "ঝালকাঠি",
                "upzillas" => [
                    [
                        "name" => "Jhalokati Sadar",
                        "bn" => "ঝালকাঠি সদর",
                    ],
                    [
                        "name" => "Kathalia",
                        "bn" => "কাঠালিয়া",
                    ],
                    [
                        "name" => "Nalchity",
                        "bn" => "নলছিটি",
                    ],
                    [
                        "name" => "Rajapur",
                        "bn" => "রাজাপুর",
                    ],
                ]
            ],
            "patuakhali" => [
                "name" => "Patuakhali",
                "bn" => "পটুয়াখালি",
                "upzillas" => [
                    [
                        "name" => "Bauphal",
                        "bn" => "বাউফল",
                    ],
                    [
                        "name" => "Patuakhali Sadar",
                        "bn" => "পটুয়াখালী সদর",
                    ],
                    [
                        "name" => "Dumki",
                        "bn" => "দুমকি",
                    ],
                    [
                        "name" => "Dashmina",
                        "bn" => "দশমিনা",
                    ],
                    [
                        "name" => "Kalapara",
                        "bn" => "কলাপাড়া",
                    ],
                    [
                        "name" => "Mirzaganj",
                        "bn" => "মির্জাগঞ্জ",
                    ],
                    [
                        "name" => "Galachipa",
                        "bn" => "গলাচিপা",
                    ],
                    [
                        "name" => "Rangabali",
                        "bn" => "রাঙ্গাবালী",
                    ],
                ]
            ],
            "pirojpur" => [
                "name" => "Pirojpur",
                "bn" => "পিরোজপুর",
                "upzillas" => [
                    [
                        "name" => "Pirojpur Sadar",
                        "bn" => "পিরোজপুর সদর",
                    ],
                    [
                        "name" => "Nazirpur",
                        "bn" => "নাজিরপুর",
                    ],
                    [
                        "name" => "Kawkhali",
                        "bn" => "কাউখালী",
                    ],
                    [
                        "name" => "Bhandaria",
                        "bn" => "ভান্ডারিয়া",
                    ],
                    [
                        "name" => "Mathbaria",
                        "bn" => "মঠবাড়ীয়া",
                    ],
                    [
                        "name" => "Nesarabad",
                        "bn" => "নেছারাবাদ",
                    ],
                    [
                        "name" => "Indurkani",
                        "bn" => "ইন্দুরকানী",
                    ],
                ]
            ],
        ],
        "chittagong" => [
            "brahmanbaria" => [
                "name" => "Brahmanbaria",
                "bn" => "ব্রাহ্মণবাড়িয়া",
                "upzillas" => [
                    [
                        "name" => "Brahmanbaria Sadar",
                        "bn" => "ব্রাহ্মণবাড়িয়া সদর",
                    ],
                    [
                        "name" => "Kasba",
                        "bn" => "কসবা",
                    ],
                    [
                        "name" => "Nasirnagar",
                        "bn" => "নাসিরনগর",
                    ],
                    [
                        "name" => "Sarail",
                        "bn" => "সরাইল উপজেলা",
                    ],
                    [
                        "name" => "Ashuganj",
                        "bn" => "আশুগঞ্জ",
                    ],
                    [
                        "name" => "Akhaura",
                        "bn" => "আখাউড়া",
                    ],
                    [
                        "name" => "Nabinagar",
                        "bn" => "নবীনগর",
                    ],
                    [
                        "name" => "Bancharampur",
                        "bn" => "বাঞ্ছারামপুর",
                    ],
                    [
                        "name" => "Bijoynagar",
                        "bn" => "বিজয়নগর",
                    ],
                ]
            ],
            "comilla" => [
                "name" => "Comilla",
                "bn" => "কুমিল্লা",
                "upzillas" => [
                    [
                        "name" => 'Debidwar',
                        "bn" => 'দেবিদ্বার'
                    ],
                    [
                        "name" => 'Barura',
                        "bn" => 'বরুড়া'
                    ],
                    [
                        "name" => 'Brahmanpara',
                        "bn" => 'ব্রাহ্মণপাড়া'
                    ],
                    [
                        "name" => 'Chandina',
                        "bn" => 'চান্দিনা'
                    ],
                    [
                        "name" => 'Chauddagram',
                        "bn" => 'চৌদ্দগ্রাম'
                    ],
                    [
                        "name" => 'Daudkandi',
                        "bn" => 'দাউদকান্দি'
                    ],
                    [
                        "name" => 'Homna',
                        "bn" => 'হোমনা'
                    ],
                    [
                        "name" => 'Laksam',
                        "bn" => 'লাকসাম'
                    ],
                    [
                        "name" => 'Muradnagar',
                        "bn" => 'মুরাদনগর'
                    ],
                    [
                        "name" => 'Nangalkot',
                        "bn" => 'নাঙ্গলকোট'
                    ],
                    [
                        "name" => 'Cumilla Sadar',
                        "bn" => 'কুমিল্লা সদর'
                    ],
                    [
                        "name" => 'Meghna',
                        "bn" => 'মেঘনা'
                    ],
                    [
                        "name" => 'Monohargonj',
                        "bn" => 'মনোহরগঞ্জ'
                    ],
                    [
                        "name" => 'Sadar South',
                        "bn" => 'সদর দক্ষিণ'
                    ],
                    [
                        "name" => 'Titas',
                        "bn" => 'তিতাস'
                    ],
                    [
                        "name" => 'Burichang',
                        "bn" => 'বুড়িচং'
                    ],
                    [
                        "name" => 'Lalmai',
                        "bn" => 'লালমাই'
                    ],
                ],
            ],
            "chandpur" => [
                "name" => "Chandpur",
                "bn" => "চাঁদপুর",
                "upzillas" => [
                    [
                        "name" => 'Haimchar',
                        "bn" => 'হাইমচর',
                    ],
                    [
                        "name" => 'Kachua',
                        "bn" => 'কচুয়া',
                    ],
                    [
                        "name" => 'Shahrasti',
                        "bn" => 'শাহরাস্তি',
                    ],
                    [
                        "name" => 'Chandpur Sadar',
                        "bn" => 'চাঁদপুর সদর',
                    ],
                    [
                        "name" => 'Matlab South',
                        "bn" => 'মতলব দক্ষিণ',
                    ],
                    [
                        "name" => 'Hajiganj',
                        "bn" => 'হাজীগঞ্জ',
                    ],
                    [
                        "name" => 'Matlab North',
                        "bn" => 'মতলব উত্তর',
                    ],
                    [
                        "name" => 'Faridgonj',
                        "bn" => 'ফরিদগঞ্জ',
                    ],
                ],
            ],
            "lakshmipur" => [
                "name" => "Lakshmipur",
                "bn" => "লক্ষ্মীপুর",
                "upzillas" => [
                    [
                        'name' => 'Lakshmipur Sadar',
                        'bn' => 'লক্ষ্মীপুর সদর',
                    ],
                    [
                        'name' => 'Kamalnagar',
                        'bn' => 'কমলনগর',
                    ],
                    [
                        'name' => 'Raipur',
                        'bn' => 'রায়পুর',
                    ],
                    [
                        'name' => 'Ramgati',
                        'bn' => 'রামগতি',
                    ],
                    [
                        'name' => 'Ramganj',
                        'bn' => 'রামগঞ্জ',
                    ],
                ],
            ],
            "feni" => [
                "name" => "Feni",
                "bn" => "ফেনী",
                "upzillas" => [
                    [
                        "name" => 'Chhagalnaiya',
                        "bn" => 'ছাগলনাইয়া উপজেলা',
                    ],
                    [
                        "name" => 'Feni Sadar',
                        "bn" => 'ফেনী সদর',
                    ],
                    [
                        "name" => 'Sonagazi',
                        "bn" => 'সোনাগাজী উপজেলা',
                    ],
                    [
                        "name" => 'Fulgazi',
                        "bn" => 'ফুলগাজী উপজেলা',
                    ],
                    [
                        "name" => 'Parshuram',
                        "bn" => 'পরশুরাম',
                    ],
                    [
                        "name" => 'Daganbhuiyan',
                        "bn" => 'দাগনভূঞা',
                    ],
                ],
            ],
            "khagrachhari" => [
                "name" => "Khagrachhari",
                "bn" => "খাগড়াছড়ি",
                "upzillas" => [
                    [
                        "name" => 'Khagrachhari Sadar',
                        "bn" => 'খাগড়াছড়ি সদর',
                    ],
                    [
                        "name" => 'Dighinala',
                        "bn" => 'দিঘীনালা',
                    ],
                    [
                        "name" => 'Panchari',
                        "bn" => 'পানছড়ি',
                    ],
                    [
                        "name" => 'Laxmichhari',
                        "bn" => 'লক্ষীছড়ি',
                    ],
                    [
                        "name" => 'Mohalchari',
                        "bn" => 'মহালছড়ি',
                    ],
                    [
                        "name" => 'Manikchari',
                        "bn" => 'মানিকছড়ি',
                    ],
                    [
                        "name" => 'Ramgarh',
                        "bn" => 'রামগড়',
                    ],
                    [
                        "name" => 'Matiranga',
                        "bn" => 'মাটিরাঙ্গা',
                    ],
                    [
                        "name" => 'Guimara',
                        "bn" => 'গুইমারা',
                    ],
                ]
            ],
            "rangamati" => [
                "name" => "Rangamati",
                "bn" => "রাঙ্গামাটি",
                "upzillas" => [
                    [
                        "name" => 'Rangamati Sadar',
                        "bn" => 'রাঙ্গামাটি সদর',
                    ],
                    [
                        "name" => 'Kaptai',
                        "bn" => 'কাপ্তাই',
                    ],
                    [
                        "name" => 'Kawkhali',
                        "bn" => 'কাউখালী',
                    ],
                    [
                        "name" => 'Baghaichari',
                        "bn" => 'বাঘাইছড়ি',
                    ],
                    [
                        "name" => 'Barkal',
                        "bn" => 'বরকল',
                    ],
                    [
                        "name" => 'Langadu',
                        "bn" => 'লংগদু',
                    ],
                    [
                        "name" => 'Rajasthali',
                        "bn" => 'রাজস্থলী',
                    ],
                    [
                        "name" => 'Belaichari',
                        "bn" => 'বিলাইছড়ি',
                    ],
                    [
                        "name" => 'Juraichari',
                        "bn" => 'জুরাছড়ি',
                    ],
                    [
                        "name" => 'Naniarchar',
                        "bn" => 'নানিয়ারচর',
                    ],
                ]
            ],
            "bandarban" => [
                "name" => "Bandarban",
                "bn" => "বান্দরবান",
                "upzillas" => [
                    [
                        'name' => 'Bandarban Sadar',
                        'bn' => 'বান্দরবান সদর',
                    ],
                    [
                        'name' => 'Alikadam',
                        'bn' => 'আলীকদম',
                    ],
                    [
                        'name' => 'Naikhongchhari',
                        'bn' => 'নাইক্ষ্যংছড়ি',
                    ],
                    [
                        'name' => 'Rowangchhari',
                        'bn' => 'রোয়াংছড়ি',
                    ],
                    [
                        'name' => 'Lama',
                        'bn' => 'লামা',
                    ],
                    [
                        'name' => 'Ruma',
                        'bn' => 'রুমা',
                    ],
                    [
                        'name' => 'Thanchi',
                        'bn' => 'থানচি',
                    ],
                ]
            ],
            "chittagong" => [
                "name" => "Chittagong",
                "bn" => "চট্টগ্রাম",
                "upzillas" => [
                    [
                        'name' => 'Rangunia',
                        'bn' => 'রাঙ্গুনিয়া',
                    ],
                    [
                        'name' => 'Sitakunda',
                        'bn' => 'সীতাকুন্ড',
                    ],
                    [
                        'name' => 'Mirsharai',
                        'bn' => 'মীরসরাই',
                    ],
                    [
                        'name' => 'Patiya',
                        'bn' => 'পটিয়া',
                    ],
                    [
                        'name' => 'Sandwip',
                        'bn' => 'সন্দ্বীপ',
                    ],
                    [
                        'name' => 'Banshkhali',
                        'bn' => 'বাঁশখালী',
                    ],
                    [
                        'name' => 'Boalkhali',
                        'bn' => 'বোয়ালখালী',
                    ],
                    [
                        'name' => 'Anwara',
                        'bn' => 'আনোয়ারা',
                    ],
                    [
                        'name' => 'Chandanaish',
                        'bn' => 'চন্দনাইশ',
                    ],
                    [
                        'name' => 'Satkania',
                        'bn' => 'সাতকানিয়া',
                    ],
                    [
                        'name' => 'Lohagara',
                        'bn' => 'লোহাগাড়া',
                    ],
                    [
                        'name' => 'Hathazari',
                        'bn' => 'হাটহাজারী',
                    ],
                    [
                        'name' => 'Fatikchhari',
                        'bn' => 'ফটিকছড়ি',
                    ],
                    [
                        'name' => 'Raozan',
                        'bn' => 'রাউজান',
                    ],
                    [
                        'name' => 'Karnafuli',
                        'bn' => 'কর্ণফুলী',
                    ],
                ]
            ],
            "cox'sbazar" => [
                "name" => "Cox's Bazar",
                "bn" => "কক্সবাজার",
                "upzillas" => [
                    [
                        'name' => 'Cox\'s Bazar Sadar',
                        'bn' => 'কক্সবাজার সদর',
                    ],
                    [
                        'name' => 'Chakaria',
                        'bn' => 'চকরিয়া',
                    ],
                    [
                        'name' => 'Kutubdia',
                        'bn' => 'কুতুবদিয়া',
                    ],
                    [
                        'name' => 'Ukhiya',
                        'bn' => 'উখিয়া',
                    ],
                    [
                        'name' => 'Moheshkhali',
                        'bn' => 'মহেশখালী',
                    ],
                    [
                        'name' => 'Pekua',
                        'bn' => 'পেকুয়া',
                    ],
                    [
                        'name' => 'Ramu',
                        'bn' => 'রামু',
                    ],
                    [
                        'name' => 'Teknaf',
                        'bn' => 'টেকনাফ',
                    ],
                ]
            ],
            "noakhali" => [
                "name" => "Noakhali",
                "bn" => "নোয়াখালি",
                "upzillas" => [
                    [
                        'name' => 'Noakhali Sadar',
                        'bn' => 'নোয়াখালী',
                    ],
                    [
                        'name' => 'Companiganj',
                        'bn' => 'কোম্পানীগঞ্জ',
                    ],
                    [
                        'name' => 'Begumganj',
                        'bn' => 'বেগমগঞ্জ',
                    ],
                    [
                        'name' => 'Hatia',
                        'bn' => 'হাতিয়া',
                    ],
                    [
                        'name' => 'Subarnachar',
                        'bn' => 'সুবর্ণচর',
                    ],
                    [
                        'name' => 'Kabirhat',
                        'bn' => 'কবিরহাট',
                    ],
                    [
                        'name' => 'Senbug',
                        'bn' => 'সেনবাগ',
                    ],
                    [
                        'name' => 'Chatkhil',
                        'bn' => 'চাটখিল',
                    ],
                    [
                        'name' => 'Sonaimuri',
                        'bn' => 'সোনাইমুড়ী',
                    ],
                ]
            ],
        ],
        "khulna" => [
            "jhenaidah" => [
                "name" => "Jhenaidah",
                "bn" => "ঝিনাইদহ",
                "upzillas" => [
                    [
                        'name' => 'Jhenaidah Sadar',
                        'bn' => 'ঝিনাইদহ সদর',
                    ],
                    [
                        'name' => 'Shailkupa',
                        'bn' => 'শৈলকুপা',
                    ],
                    [
                        'name' => 'Harinakundu',
                        'bn' => 'হরিণাকুন্ডু',
                    ],
                    [
                        'name' => 'Kaliganj',
                        'bn' => 'কালীগঞ্জ',
                    ],
                    [
                        'name' => 'Kotchandpur',
                        'bn' => 'কোটচাঁদপুর',
                    ],
                    [
                        'name' => 'Moheshpur',
                        'bn' => 'মহেশপুর',
                    ],
                ],
            ],
            "khulna" => [
                "name" => "Khulna",
                "bn" => "খুলনা",
                "upzillas" => [
                    [
                        'name' => 'Paikgasa',
                        'bn' => 'পাইকগাছা',
                    ],
                    [
                        'name' => 'Fultola',
                        'bn' => 'ফুলতলা উপজেলা',
                    ],
                    [
                        'name' => 'Digholia',
                        'bn' => 'দিঘলিয়া উপজেলা',
                    ],
                    [
                        'name' => 'Rupsha',
                        'bn' => 'রূপসা উপজেলা',
                    ],
                    [
                        'name' => 'Terokhada',
                        'bn' => 'তেরখাদা উপজেলা',
                    ],
                    [
                        'name' => 'Dumuria',
                        'bn' => 'ডুমুরিয়া উপজেলা',
                    ],
                    [
                        'name' => 'Botiaghata',
                        'bn' => 'বটিয়াঘাটা',
                    ],
                    [
                        'name' => 'Dakop',
                        'bn' => 'দাকোপ উপজেলা',
                    ],
                    [
                        'name' => 'Koyra',
                        'bn' => 'কয়রা উপজেলা',
                    ],
                ],
            ],
            "kushtia" => [
                "name" => "Kushtia",
                "bn" => "কুষ্টিয়া",
                "upzillas" => [
                    [
                        'name' => 'Kushtia Sadar',
                        'bn' => 'কুষ্টিয়া সদর',
                    ],
                    [
                        'name' => 'Kumarkhali',
                        'bn' => 'কুমারখালী',
                    ],
                    [
                        'name' => 'Khoksa',
                        'bn' => 'খোকসা',
                    ],
                    [
                        'name' => 'Mirpur Kushtia',
                        'bn' => 'মিরপুর',
                    ],
                    [
                        'name' => 'Daulatpur Kushtia',
                        'bn' => 'দৌলতপুর',
                    ],
                    [
                        'name' => 'Bheramara',
                        'bn' => 'ভেড়ামারা',
                    ],
                ],
            ],
            "magura" => [
                "name" => "Magura",
                "bn" => "মাগুরা",
                "upzillas" => [
                    [
                        'name' => 'Shalikha',
                        'bn' => 'শালিখা',
                    ],
                    [
                        'name' => 'Sreepur',
                        'bn' => 'শ্রীপুর',
                    ],
                    [
                        'name' => 'Magura Sadar',
                        'bn' => 'মাগুরা সদর',
                    ],
                    [
                        'name' => 'Mohammadpur',
                        'bn' => 'মহম্মদপুর',
                    ],
                ],
            ],
            "meherpur" => [
                "name" => "Meherpur",
                "bn" => "মেহেরপুর",
                "upzillas" => [
                    [
                        'name' => 'Mujibnagar',
                        'bn' => 'মুজিবনগর',
                    ],
                    [
                        'name' => 'Meherpursadar',
                        'bn' => 'মেহেরপুর সদর',
                    ],
                    [
                        'name' => 'Gangni',
                        'bn' => 'গাংনী',
                    ],
                ],
            ],
            "narail" => [
                "name" => "Narail",
                "bn" => "নড়াইল",
                "upzillas" => [
                    [
                        'name' => 'Narail Sadar',
                        'bn' => 'নড়াইল সদর',
                    ],
                    [
                        'name' => 'Lohagara',
                        'bn' => 'লোহাগড়া',
                    ],
                    [
                        'name' => 'Kalia',
                        'bn' => 'কালিয়া',
                    ],
                ],
            ],
            "satkhira" => [
                "name" => "Satkhira",
                "bn" => "সাতক্ষীরা",
                "upzillas" => [
                    [
                        'name' => 'Assasuni',
                        'bn' => 'আশাশুনি',
                    ],
                    [
                        'name' => 'Debhata',
                        'bn' => 'দেবহাটা',
                    ],
                    [
                        'name' => 'Kalaroa',
                        'bn' => 'কলারোয়া',
                    ],
                    [
                        'name' => 'Satkhira Sadar',
                        'bn' => 'সাতক্ষীরা সদর',
                    ],
                    [
                        'name' => 'Shyamnagar',
                        'bn' => 'শ্যামনগর',
                    ],
                    [
                        'name' => 'Tala',
                        'bn' => 'তালা',
                    ],
                    [
                        'name' => 'Kaliganj',
                        'bn' => 'কালিগঞ্জ',
                    ],
                ],
            ],
            "bagerhat" => [
                "name" => "Bagerhat",
                "bn" => "বাগেরহাট",
                "upzillas" => [
                    [
                        'name' => 'Fakirhat',
                        'bn' => 'ফকিরহাট',
                    ],
                    [
                        'name' => 'Bagerhat Sadar',
                        'bn' => 'বাগেরহাট সদর',
                    ],
                    [
                        'name' => 'Mollahat',
                        'bn' => 'মোল্লাহাট',
                    ],
                    [
                        'name' => 'Sarankhola',
                        'bn' => 'শরণখোলা',
                    ],
                    [
                        'name' => 'Rampal',
                        'bn' => 'রামপাল',
                    ],
                    [
                        'name' => 'Morrelganj',
                        'bn' => 'মোড়েলগঞ্জ',
                    ],
                    [
                        'name' => 'Kachua',
                        'bn' => 'কচুয়া',
                    ],
                    [
                        'name' => 'Mongla',
                        'bn' => 'মোংলা',
                    ],
                    [
                        'name' => 'Chitalmari',
                        'bn' => 'চিতলমারী',
                    ],
                ],
            ],
            "chuadanga" => [
                "name" => "Chuadanga",
                "bn" => "চুয়াডাঙ্গা",
                "upzillas" => [
                    [
                        'name' => 'Chuadanga Sadar',
                        'bn' => 'চুয়াডাঙ্গা সদর',
                    ],
                    [
                        'name' => 'Alamdanga',
                        'bn' => 'আলমডাঙ্গা',
                    ],
                    [
                        'name' => 'Damurhuda',
                        'bn' => 'দামুড়হুদা',
                    ],
                    [
                        'name' => 'Jibannagar',
                        'bn' => 'জীবননগর',
                    ],
                ],
            ],
            "jashore" => [
                "name" => "Jashore",
                "bn" => "যশোর",
                "upzillas" => [
                    [
                        'name' => 'Manirampur',
                        'bn' => 'মণিরামপুর',
                    ],
                    [
                        'name' => 'Abhaynagar',
                        'bn' => 'অভয়নগর',
                    ],
                    [
                        'name' => 'Bagherpara',
                        'bn' => 'বাঘারপাড়া',
                    ],
                    [
                        'name' => 'Chougachha',
                        'bn' => 'চৌগাছা',
                    ],
                    [
                        'name' => 'Jhikargacha',
                        'bn' => 'ঝিকরগাছা',
                    ],
                    [
                        'name' => 'Keshabpur',
                        'bn' => 'কেশবপুর',
                    ],
                    [
                        'name' => 'Jashore Sadar',
                        'bn' => 'যশোর সদর',
                    ],
                    [
                        'name' => 'Sharsha',
                        'bn' => 'শার্শা',
                    ],
                ],
            ],
        ],
        "mymensingh" => [
            "jamalpur" => [
                "name" => "Jamalpur",
                "bn" => "জামালপুর",
                "upzillas" => [
                    [
                        'name' => 'Jamalpur Sadar',
                        'bn' => 'জামালপুর সদর',
                    ],
                    [
                        'name' => 'Melandah',
                        'bn' => 'মেলান্দহ',
                    ],
                    [
                        'name' => 'Islampur',
                        'bn' => 'ইসলামপুর',
                    ],
                    [
                        'name' => 'Dewangonj',
                        'bn' => 'দেওয়ানগঞ্জ',
                    ],
                    [
                        'name' => 'Sarishabari',
                        'bn' => 'সরিষাবাড়ী',
                    ],
                    [
                        'name' => 'Madarganj',
                        'bn' => 'মাদারগঞ্জ',
                    ],
                    [
                        'name' => 'Bokshiganj',
                        'bn' => 'বকশীগঞ্জ',
                    ],
                ]
            ],
            "mymensingh" => [
                "name" => "Mymensingh",
                "bn" => "ময়মনসিংহ",
                "upzillas" => [
                    [
                        'name' => 'Fulbaria',
                        'bn' => 'ফুলবাড়ীয়া',
                    ],
                    [
                        'name' => 'Trishal',
                        'bn' => 'ত্রিশাল',
                    ],
                    [
                        'name' => 'Bhaluka',
                        'bn' => 'ভালুকা',
                    ],
                    [
                        'name' => 'Muktagacha',
                        'bn' => 'মুক্তাগাছা',
                    ],
                    [
                        'name' => 'Mymensinghsadar',
                        'bn' => 'ময়মনসিংহ সদর',
                    ],
                    [
                        'name' => 'Dhobaura',
                        'bn' => 'ধোবাউড়া',
                    ],
                    [
                        'name' => 'Phulpur',
                        'bn' => 'ফুলপুর',
                    ],
                    [
                        'name' => 'Haluaghat',
                        'bn' => 'হালুয়াঘাট',
                    ],
                    [
                        'name' => 'Gouripur',
                        'bn' => 'গৌরীপুর',
                    ],
                    [
                        'name' => 'Gafargaon',
                        'bn' => 'গফরগাঁও',
                    ],
                    [
                        'name' => 'Iswarganj',
                        'bn' => 'ঈশ্বরগঞ্জ',
                    ],
                    [
                        'name' => 'Nandail',
                        'bn' => 'নান্দাইল',
                    ],
                    [
                        'name' => 'Tarakanda',
                        'bn' => 'তারাকান্দা',
                    ],
                ]
            ],
            "netrokona" => [
                "name" => "Netrokona",
                "bn" => "নেত্রকোনা",
                "upzillas" => [
                    [
                        'name' => 'Barhatta',
                        'bn' => 'বারহাট্টা',
                    ],
                    [
                        'name' => 'Durgapur',
                        'bn' => 'দুর্গাপুর',
                    ],
                    [
                        'name' => 'Kendua',
                        'bn' => 'কেন্দুয়া',
                    ],
                    [
                        'name' => 'Atpara',
                        'bn' => 'আটপাড়া',
                    ],
                    [
                        'name' => 'Madan',
                        'bn' => 'মদন',
                    ],
                    [
                        'name' => 'Khaliajuri',
                        'bn' => 'খালিয়াজুরী',
                    ],
                    [
                        'name' => 'Kalmakanda',
                        'bn' => 'কলমাকান্দা',
                    ],
                    [
                        'name' => 'Mohongonj',
                        'bn' => 'মোহনগঞ্জ',
                    ],
                    [
                        'name' => 'Purbadhala',
                        'bn' => 'পূর্বধলা',
                    ],
                    [
                        'name' => 'Netrokona Sadar',
                        'bn' => 'নেত্রকোণা সদর',
                    ],
                ]
            ],
            "sherpur" => [
                "name" => "Sherpur",
                "bn" => "শেরপুর",
                "upzillas" => [
                    [
                        'name' => 'Sherpur Sadar',
                        'bn' => 'শেরপুর সদর',
                    ],
                    [
                        'name' => 'Nalitabari',
                        'bn' => 'নালিতাবাড়ী',
                    ],
                    [
                        'name' => 'Sreebordi',
                        'bn' => 'শ্রীবরদী',
                    ],
                    [
                        'name' => 'Nokla',
                        'bn' => 'নকলা',
                    ],
                    [
                        'name' => 'Jhenaigati',
                        'bn' => 'ঝিনাইগাতী',
                    ],
                ]
            ],
        ],
        "rajshahi" => [
            "bogura" => [
                "name" => "Bogura",
                "bn" => "বগুড়া",
                "upzillas" => [
                    [
                        'name' => 'Kahaloo',
                        'bn' => 'কাহালু উপজেলা',
                    ],
                    [
                        'name' => 'Bogura Sadar',
                        'bn' => 'বগুড়া সদর',
                    ],
                    [
                        'name' => 'Shariakandi',
                        'bn' => 'সারিয়াকান্দি',
                    ],
                    [
                        'name' => 'Shajahanpur',
                        'bn' => 'শাজাহানপুর',
                    ],
                    [
                        'name' => 'Dupchanchia',
                        'bn' => 'দুপচাচিঁয়া উপজেলা',
                    ],
                    [
                        'name' => 'Adamdighi',
                        'bn' => 'আদমদিঘি উপজেলা',
                    ],
                    [
                        'name' => 'Nondigram',
                        'bn' => 'নন্দিগ্রাম',
                    ],
                    [
                        'name' => 'Sonatala',
                        'bn' => 'সোনাতলা উপজেলা',
                    ],
                    [
                        'name' => 'Dhunot',
                        'bn' => 'ধুনট উপজেলা',
                    ],
                    [
                        'name' => 'Gabtali',
                        'bn' => 'গাবতলী',
                    ],
                    [
                        'name' => 'Sherpur',
                        'bn' => 'শেরপুর উপজেলা',
                    ],
                    [
                        'name' => 'Shibganj',
                        'bn' => 'শিবগঞ্জ',
                    ],
                ]
            ],
            "joypurhat" => [
                "name" => "Joypurhat",
                "bn" => "জয়পুরহাট",
                "upzillas" => [
                    [
                        'name' => 'Akkelpur',
                        'bn' => 'আক্কেলপুর উপজেলা',
                    ],
                    [
                        'name' => 'Kalai',
                        'bn' => 'কালাই উপজেলা',
                    ],
                    [
                        'name' => 'Khetlal',
                        'bn' => 'ক্ষেতলাল উপজেলা',
                    ],
                    [
                        'name' => 'Panchbibi',
                        'bn' => 'পাঁচবিবি উপজেলা',
                    ],
                    [
                        'name' => 'Joypurhat Sadar',
                        'bn' => 'জয়পুরহাট সদর',
                    ],
                ]
            ],
            "naogaon" => [
                "name" => "Naogaon",
                "bn" => "নওগাঁ",
                "upzillas" => [
                    [
                        'name' => 'Mohadevpur',
                        'bn' => 'মহাদেবপুর উপজেলা',
                    ],
                    [
                        'name' => 'Badalgachi',
                        'bn' => 'বদলগাছী উপজেলা',
                    ],
                    [
                        'name' => 'Patnitala',
                        'bn' => 'পত্নিতলা উপজেলা',
                    ],
                    [
                        'name' => 'Dhamoirhat',
                        'bn' => 'ধামইরহাট উপজেলা',
                    ],
                    [
                        'name' => 'Niamatpur',
                        'bn' => 'নিয়ামতপুর উপজেলা',
                    ],
                    [
                        'name' => 'Manda',
                        'bn' => 'মান্দা উপজেলা',
                    ],
                    [
                        'name' => 'Atrai',
                        'bn' => 'আত্রাই উপজেলা',
                    ],
                    [
                        'name' => 'Raninagar',
                        'bn' => 'রাণীনগর উপজেলা',
                    ],
                    [
                        'name' => 'Naogaonsadar',
                        'bn' => 'নওগাঁ সদর',
                    ],
                    [
                        'name' => 'Porsha',
                        'bn' => 'পোরশা উপজেলা',
                    ],
                    [
                        'name' => 'Sapahar',
                        'bn' => 'সাপাহার',
                    ],
                ]
            ],
            "natore" => [
                "name" => "Natore",
                "bn" => "নাটোর",
                "upzillas" => [
                    [
                        'name' => 'Natore Sadar',
                        'bn' => 'নাটোর সদর',
                    ],
                    [
                        'name' => 'Singra',
                        'bn' => 'সিংড়া',
                    ],
                    [
                        'name' => 'Baraigram',
                        'bn' => 'বড়াইগ্রাম',
                    ],
                    [
                        'name' => 'Bagatipara',
                        'bn' => 'বাগাতিপাড়া',
                    ],
                    [
                        'name' => 'Lalpur',
                        'bn' => 'লালপুর',
                    ],
                    [
                        'name' => 'Gurudaspur',
                        'bn' => 'গুরুদাসপুর',
                    ],
                    [
                        'name' => 'Naldanga',
                        'bn' => 'নলডাঙ্গা',
                    ],
                ]
            ],
            "chapainawabganj" => [
                "name" => "Chapainawabganj",
                "bn" => "চাঁপাইনবাবগঞ্জ",
                "upzillas" => [
                    [
                        'name' => 'Chapainawabganj Sadar',
                        'bn' => 'চাঁপাইনবাবগঞ্জ সদর',
                    ],
                    [
                        'name' => 'Gomostapur',
                        'bn' => 'গোমস্তাপুর',
                    ],
                    [
                        'name' => 'Nachol',
                        'bn' => 'নাচোল',
                    ],
                    [
                        'name' => 'Bholahat',
                        'bn' => 'ভোলাহাট',
                    ],
                    [
                        'name' => 'Shibganj',
                        'bn' => 'শিবগঞ্জ',
                    ],
                ],
            ],
            "pabna" => [
                "name" => "Pabna",
                "bn" => "পাবনা",
                "upzillas" => [
                    [
                        'name' => 'Sujanagar',
                        'bn' => 'সুজানগর',
                    ],
                    [
                        'name' => 'Ishurdi',
                        'bn' => 'ঈশ্বরদী',
                    ],
                    [
                        'name' => 'Bhangura',
                        'bn' => 'ভাঙ্গুড়া',
                    ],
                    [
                        'name' => 'Pabna Sadar',
                        'bn' => 'পাবনা সদর',
                    ],
                    [
                        'name' => 'Bera',
                        'bn' => 'বেড়া',
                    ],
                    [
                        'name' => 'Atghoria',
                        'bn' => 'আটঘরিয়া',
                    ],
                    [
                        'name' => 'Chatmohar',
                        'bn' => 'চাটমোহর',
                    ],
                    [
                        'name' => 'Santhia',
                        'bn' => 'সাঁথিয়া',
                    ],
                    [
                        'name' => 'Faridpur',
                        'bn' => 'ফরিদপুর',
                    ],
                ],
            ],
            "rajshahi" => [
                "name" => "Rajshahi",
                "bn" => "রাজশাহী",
                "upzillas" => [
                    [
                        'name' => 'Paba',
                        'bn' => 'পবা উপজেলা',
                    ],
                    [
                        'name' => 'Durgapur',
                        'bn' => 'দুর্গাপুর উপজেলা',
                    ],
                    [
                        'name' => 'Mohonpur',
                        'bn' => 'মোহনপুর উপজেলা',
                    ],
                    [
                        'name' => 'Charghat',
                        'bn' => 'চারঘাট উপজেলা',
                    ],
                    [
                        'name' => 'Puthia',
                        'bn' => 'পুঠিয়া উপজেলা',
                    ],
                    [
                        'name' => 'Bagha',
                        'bn' => 'বাঘা উপজেলা',
                    ],
                    [
                        'name' => 'Godagari',
                        'bn' => 'গোদাগাড়ী উপজেলা',
                    ],
                    [
                        'name' => 'Tanore',
                        'bn' => 'তানোর উপজেলা',
                    ],
                    [
                        'name' => 'Bagmara',
                        'bn' => 'বাগমারা উপজেলা',
                    ],
                ],
            ],
            "sirajganj" => [
                "name" => "Sirajganj",
                "bn" => "সিরাজগঞ্জ",
                "upzillas" => [
                    [
                        'name' => 'Belkuchi',
                        'bn' => 'বেলকুচি'
                    ],
                    [
                        'name' => 'Chauhali',
                        'bn' => 'চৌহালি'
                    ],
                    [
                        'name' => 'Kamarkhand',
                        'bn' => 'কামারখন্দ'
                    ],
                    [
                        'name' => 'Kazipur',
                        'bn' => 'কাজীপুর'
                    ],
                    [
                        'name' => 'Raigonj',
                        'bn' => 'রায়গঞ্জ'
                    ],
                    [
                        'name' => 'Shahjadpur',
                        'bn' => 'শাহজাদপুর'
                    ],
                    [
                        'name' => 'Sirajganj Sadar',
                        'bn' => 'সিরাজগঞ্জ'
                    ],
                    [
                        'name' => 'Tarash',
                        'bn' => 'তাড়াশ'
                    ],
                    [
                        'name' => 'Ullapara',
                        'bn' => 'উল্লাপাড়া'
                    ],
                ]
            ],
        ],
        "sylhet" => [
            "habiganj" => [
                "name" => "Habiganj",
                "bn" => "হবিগঞ্জ",
                "upzillas" => [
                    [
                        'name' => 'Nabiganj',
                        'bn' => 'নবীগঞ্জ'
                    ],
                    [
                        'name' => 'Bahubal',
                        'bn' => 'বাহুবল'
                    ],
                    [
                        'name' => 'Ajmiriganj',
                        'bn' => 'আজমিরীগঞ্জ'
                    ],
                    [
                        'name' => 'Baniachong',
                        'bn' => 'বানিয়াচং'
                    ],
                    [
                        'name' => 'Lakhai',
                        'bn' => 'লাখাই'
                    ],
                    [
                        'name' => 'Chunarughat',
                        'bn' => 'চুনারুঘাট'
                    ],
                    [
                        'name' => 'Habiganj Sadar',
                        'bn' => 'হবিগঞ্জ সদর'
                    ],
                    [
                        'name' => 'Madhabpur',
                        'bn' => 'মাধবপুর উপজেলা'
                    ],
                    [
                        'name' => 'Shayestaganj',
                        'bn' => 'শায়েস্তাগঞ্জ'
                    ],
                ]
            ],
            "moulvibazar" => [
                "name" => "Moulvibazar",
                "bn" => "মৌলভীবাজার",
                "upzillas" => [
                    [
                        'name' => 'Barlekha',
                        'bn' => 'বড়লেখা'
                    ],
                    [
                        'name' => 'Kamolganj',
                        'bn' => 'কমলগঞ্জ'
                    ],
                    [
                        'name' => 'Kulaura',
                        'bn' => 'কুলাউড়া'
                    ],
                    [
                        'name' => 'Moulvibazar Sadar',
                        'bn' => 'মৌলভীবাজার সদর'
                    ],
                    [
                        'name' => 'Rajnagar',
                        'bn' => 'রাজনগর'
                    ],
                    [
                        'name' => 'Sreemangal',
                        'bn' => 'শ্রীমঙ্গল'
                    ],
                    [
                        'name' => 'Juri',
                        'bn' => 'জুড়ী'
                    ],
                ]
            ],
            "sunamganj" => [
                "name" => "Sunamganj",
                "bn" => "সুনামগঞ্জ",
                "upzillas" => [
                    [
                        'name' => 'Sunamganj Sadar',
                        'bn' => 'সুনামগঞ্জ সদর'
                    ],
                    [
                        'name' => 'South Sunamganj',
                        'bn' => 'দক্ষিণ সুনামগঞ্জ'
                    ],
                    [
                        'name' => 'Bishwambarpur',
                        'bn' => 'বিশ্বম্ভরপুর'
                    ],
                    [
                        'name' => 'Chhatak',
                        'bn' => 'ছাতক'
                    ],
                    [
                        'name' => 'Jagannathpur',
                        'bn' => 'জগন্নাথপুর'
                    ],
                    [
                        'name' => 'Dowarabazar',
                        'bn' => 'দোয়ারাবাজার'
                    ],
                    [
                        'name' => 'Tahirpur',
                        'bn' => 'তাহিরপুর'
                    ],
                    [
                        'name' => 'Dharmapasha',
                        'bn' => 'ধর্মপাশা'
                    ],
                    [
                        'name' => 'Jamalganj',
                        'bn' => 'জামালগঞ্জ'
                    ],
                    [
                        'name' => 'Shalla',
                        'bn' => 'শাল্লা'
                    ],
                    [
                        'name' => 'Derai',
                        'bn' => 'দিরাই'
                    ],
                    [
                        'name' => 'Madhyanagar',
                        'bn' => 'মধ্যনগর'
                    ],
                ]
            ],
            "sylhet" => [
                "name" => "Sylhet",
                "bn" => "সিলেট",
                "upzillas" => [
                    [
                        'name' => 'Balaganj',
                        'bn' => 'বালাগঞ্জ'
                    ],
                    [
                        'name' => 'Beanibazar',
                        'bn' => 'বিয়ানীবাজার'
                    ],
                    [
                        'name' => 'Bishwanath',
                        'bn' => 'বিশ্বনাথ'
                    ],
                    [
                        'name' => 'Companiganj',
                        'bn' => 'কোম্পানীগঞ্জ'
                    ],
                    [
                        'name' => 'Fenchuganj',
                        'bn' => 'ফেঞ্চুগঞ্জ'
                    ],
                    [
                        'name' => 'Golapganj',
                        'bn' => 'গোলাপগঞ্জ'
                    ],
                    [
                        'name' => 'Gowainghat',
                        'bn' => 'গোয়াইনঘাট'
                    ],
                    [
                        'name' => 'Jaintiapur',
                        'bn' => 'জৈন্তাপুর'
                    ],
                    [
                        'name' => 'Kanaighat',
                        'bn' => 'কানাইঘাট'
                    ],
                    [
                        'name' => 'Sylhet Sadar',
                        'bn' => 'সিলেট সদর'
                    ],
                    [
                        'name' => 'Zakiganj',
                        'bn' => 'জকিগঞ্জ'
                    ],
                    [
                        'name' => 'Dakshin Surma',
                        'bn' => 'দক্ষিণ সুরমা'
                    ],
                    [
                        'name' => 'Osmani Nagar',
                        'bn' => 'ওসমানী'
                    ],
                ]
            ],
        ],
        "rangpur" => [
            "dinajpur" => [
                "name" => "Dinajpur",
                "bn" => "দিনাজপুর",
                "upzillas" => [
                    [
                        'name' => 'Nawabganj',
                        'bn' => 'নবাবগঞ্জ'
                    ],
                    [
                        'name' => 'Birganj',
                        'bn' => 'বীরগঞ্জ উপজেলা'
                    ],
                    [
                        'name' => 'Ghoraghat',
                        'bn' => 'ঘোড়াঘাট'
                    ],
                    [
                        'name' => 'Birampur',
                        'bn' => 'বিরামপুর'
                    ],
                    [
                        'name' => 'Parbatipur',
                        'bn' => 'পার্বতীপুর উপজেলা'
                    ],
                    [
                        'name' => 'Bochaganj',
                        'bn' => 'বোচাগঞ্জ উপজেলা'
                    ],
                    [
                        'name' => 'Kaharol',
                        'bn' => 'কাহারোল উপজেলা'
                    ],
                    [
                        'name' => 'Fulbari',
                        'bn' => 'ফুলবাড়ী উপজেলা'
                    ],
                    [
                        'name' => 'Dinajpursadar',
                        'bn' => 'দিনাজপুর সদর'
                    ],
                    [
                        'name' => 'Hakimpur',
                        'bn' => 'হাকিমপুর উপজেলা'
                    ],
                    [
                        'name' => 'Khansama',
                        'bn' => 'খানসামা'
                    ],
                    [
                        'name' => 'Birol',
                        'bn' => 'বিরল উপজেলা'
                    ],
                    [
                        'name' => 'Chirirbandar',
                        'bn' => 'চিরিরবন্দর উপজেলা'
                    ],
                ]
            ],
            "gaibandha" => [
                "name" => "Gaibandha",
                "bn" => "গাইবান্ধা",
                "upzillas" => [
                    [
                        'name' => 'Sadullapur',
                        'bn' => 'সাদুল্লাপুর'
                    ],
                    [
                        'name' => 'Gaibandha Sadar',
                        'bn' => 'গাইবান্ধা সদর'
                    ],
                    [
                        'name' => 'Palashbari',
                        'bn' => 'পলাশবাড়ী'
                    ],
                    [
                        'name' => 'Saghata',
                        'bn' => 'সাঘাটা উপজেলা'
                    ],
                    [
                        'name' => 'Gobindaganj',
                        'bn' => 'গোবিন্দগঞ্জ উপজেলা'
                    ],
                    [
                        'name' => 'Sundarganj',
                        'bn' => 'সুন্দরগঞ্জ'
                    ],
                    [
                        'name' => 'Phulchari',
                        'bn' => 'ফুলছড়ি'
                    ],
                ]
            ],
            "kurigram" => [
                "name" => "Kurigram",
                "bn" => "কুড়িগ্রাম",
                "upzillas" => [
                    [
                        'name' => 'Kurigram Sadar',
                        'bn' => 'কুড়িগ্রাম সদর'
                    ],
                    [
                        'name' => 'Nageshwari',
                        'bn' => 'নাগেশ্বরী'
                    ],
                    [
                        'name' => 'Bhurungamari',
                        'bn' => 'ভুরুঙ্গামারী'
                    ],
                    [
                        'name' => 'Phulbari',
                        'bn' => 'ফুলবাড়ী'
                    ],
                    [
                        'name' => 'Rajarhat',
                        'bn' => 'রাজারহাট'
                    ],
                    [
                        'name' => 'Ulipur',
                        'bn' => 'উলিপুর'
                    ],
                    [
                        'name' => 'Chilmari',
                        'bn' => 'চিলমারী'
                    ],
                    [
                        'name' => 'Rowmari',
                        'bn' => 'রৌমারী'
                    ],
                    [
                        'name' => 'Charrajibpur',
                        'bn' => 'চর রাজিবপুর'
                    ],
                ]
            ],
            "lalmonirhat" => [
                "name" => "Lalmonirhat",
                "bn" => "লালমনিরহাট",
                "upzillas" => [
                    [
                        'name' => 'Lalmonirhat Sadar',
                        'bn' => 'লালমনিরহাট সদর'
                    ],
                    [
                        'name' => 'Kaliganj',
                        'bn' => 'কালীগঞ্জ'
                    ],
                    [
                        'name' => 'Hatibandha',
                        'bn' => 'হাতীবান্ধা'
                    ],
                    [
                        'name' => 'Patgram',
                        'bn' => 'পাটগ্রাম'
                    ],
                    [
                        'name' => 'Aditmari',
                        'bn' => 'আদিতমারী উপজেলা'
                    ],
                ]
            ],
            "nilphamari" => [
                "name" => "Nilphamari",
                "bn" => "নীলফামারি",
                "upzillas" => [
                    [
                        'name' => 'Syedpur',
                        'bn' => 'সৈয়দপুর উপজেলা'
                    ],
                    [
                        'name' => 'Domar',
                        'bn' => 'ডোমার উপজেলা'
                    ],
                    [
                        'name' => 'Dimla',
                        'bn' => 'ডিমলা'
                    ],
                    [
                        'name' => 'Jaldhaka',
                        'bn' => 'জলঢাকা'
                    ],
                    [
                        'name' => 'Kishorganj',
                        'bn' => 'কিশোরগঞ্জ'
                    ],
                    [
                        'name' => 'Nilphamari Sadar',
                        'bn' => 'নীলফামারী সদর'
                    ],
                ]
            ],
            "panchagarh" => [
                "name" => "Panchagarh",
                "bn" => "পঞ্চগড়",
                "upzillas" => [
                    [
                        'name' => 'Panchagarh Sadar',
                        'bn' => 'পঞ্চগড়'
                    ],
                    [
                        'name' => 'Debiganj',
                        'bn' => 'দেবীগঞ্জ'
                    ],
                    [
                        'name' => 'Boda',
                        'bn' => 'বোদা'
                    ],
                    [
                        'name' => 'Atwari',
                        'bn' => 'আটোয়ারী'
                    ],
                    [
                        'name' => 'Tetulia',
                        'bn' => 'তেতুলিয়া'
                    ],
                ]
            ],
            "rangpur" => [
                "name" => "Rangpur",
                "bn" => "রংপুর",
                "upzillas" => [
                    [
                        'name' => 'Rangpur Sadar',
                        'bn' => 'রংপুর সদর'
                    ],
                    [
                        'name' => 'Gangachara',
                        'bn' => 'গংগাচড়া'
                    ],
                    [
                        'name' => 'Taragonj',
                        'bn' => 'তারাগঞ্জ উপজেলা'
                    ],
                    [
                        'name' => 'Badargonj',
                        'bn' => 'বদরগঞ্জ উপজেলা'
                    ],
                    [
                        'name' => 'Mithapukur',
                        'bn' => 'মিঠাপুকুর উপজেলা'
                    ],
                    [
                        'name' => 'Pirgonj',
                        'bn' => 'পীরগঞ্জ উপজেলা'
                    ],
                    [
                        'name' => 'Kaunia',
                        'bn' => 'কাউনিয়া উপজেলা'
                    ],
                    [
                        'name' => 'Pirgacha',
                        'bn' => 'পীরগাছা উপজেলা'
                    ],
                ]
            ],
            "thakurgaon" => [
                "name" => "Thakurgaon",
                "bn" => "ঠাকুরগাঁও",
                "upzillas" => [
                    [
                        'name' => 'Thakurgaon Sadar',
                        'bn' => 'ঠাকুরগাঁও সদর'
                    ],
                    [
                        'name' => 'Pirganj',
                        'bn' => 'পীরগঞ্জ উপজেলা'
                    ],
                    [
                        'name' => 'Ranisankail',
                        'bn' => 'রাণীশংকৈল উপজেলা'
                    ],
                    [
                        'name' => 'Haripur',
                        'bn' => 'হরিপুর উপজেলা'
                    ],
                    [
                        'name' => 'Baliadangi',
                        'bn' => 'বালিয়াডাঙ্গী উপজেলা'
                    ],
                ]
            ],
        ],
    ];

    public static function getDivisions(string $type = null): array
    {
        if ($type) {
            $_type = $type === 'en' ? 'name' : 'bn';
            return array_column(self::$division, $_type, 'name');
        }
        return self::$division;
    }

    public static function getSingleDivision(string $division_name, string $type = "en"): string
    {
        $_type = $type === 'en' ? 'name' : 'bn';
        return self::$division[$division_name][$_type];
    }

    public static function getDistricts(string $type = null): array
    {
        $_type = $type === 'en' ? 'name' : 'bn';
        $_district_data = array_values(self::$district);
        $_districts = [];
        foreach ($_district_data as $district_value) {
            foreach ($district_value as $key => $value) {
                $_districts[$key] = $value;
            }
        }
        if ($type) {
            return array_column(array_values($_districts), $_type, "name");
        }
        return $_districts;
    }

    public static function getDivisionWiseDistrict(string $division, string $type = "en"): array
    {
        $_type = $type === 'en' ? 'name' : 'bn';
        return array_column(self::$district[strtolower($division)], $_type, "name");
    }

    public static function getDistrictWiseUpzillas(string $district, string $type = "en"): array
    {
        $_type = $type === 'en' ? 'name' : 'bn';
        $upzillas = [];
        $district = strtolower($district);
        $_district_data = array_values(self::$district);
        foreach ($_district_data as $district_value) {
            if (array_key_exists($district, $district_value)) {
                $upzillas = $district_value[$district]['upzillas'];
            }
        }

        return array_column($upzillas, $_type, "name");
    }
}
