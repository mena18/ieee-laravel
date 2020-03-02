<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    $members = array(
			    [2, 'Abdallah Zaitton', 'Volunteer in HR Committee', 'images/volunteers/f11121b7947ddba0b0310a7b467b5d79b61b3030.jpg', 'https://www.facebook.com/morad.mostafa.106', '#'],
			    [3, 'Ahmed Abdulhaq', 'Volunteer in HR Committee', 'images/volunteers/67e452ece3d77d4d6c26c3dc1a7c687f86fd26f1.jpg', 'https://www.facebook.com/ahmed.abdulhaq.771', 'https://www.linkedin.com/in/ahmed-abdulhaq-aa05a3125/'],
			    [4, 'Amal Essam', 'Volunteer in HR Committee', 'images/volunteers/418840916b31beeaee9fb0ac85357a18ef566168.jpg', 'https://www.facebook.com/mola.essam', 'https://www.linkedin.com/in/amal-essam-099ab7151/'],
			    [5, 'Ayman Mohamed', 'Head of Registration Committee', 'images/volunteers/b05dcf19aff40b01f50b6fa954892578d6f0ff30.jpg', 'https://www.facebook.com/ayman.mohamed.121398', 'https://www.linkedin.com/in/ayman-mohamed-196bbb14a/'],
			    [6, 'Eslam Amgad', 'Volunteer in Logistics Commitee', 'images/volunteers/26f9ed6167d2e794d931c8fe6e6e02ca70cf2eb8.JPG', 'https://www.facebook.com/eslam.amgad11', 'https://www.linkedin.com/in/eslam-amgad-500388140/'],
			    [7, 'Evram Forma', 'Vice-Head Logistics Committee', 'images/volunteers/7b6f0af01183e61d5812a9654ed5f8fa364b4b7c.jpg', 'https://www.facebook.com/evram.forma', '#'],
			    [8, 'Ahmed Alaa ul-dien', 'Vice-Head Photography Committee', 'images/volunteers/9c98ee90cdfdddb11318a2bb5157cf62bd4a2d94.jpg', 'https://www.facebook.com/profile.php?id=100004464940028', 'https://www.linkedin.com/in/ahmed-fahmy-02654214b/'],
			    [9, 'Hager Badawi', 'Head of HR Commitee', 'images/volunteers/6e041e531967340a5f9979ea96817288b8e941f2.jpg', 'https://www.facebook.com/hager.badawi', 'https://www.linkedin.com/in/hager-badawi-6a6b7a140'],
			    [10, 'Hesham Nasr', 'Volunteer in Logistics Commitee', 'images/volunteers/8c94192be6091227a35522a97c560bf28ed4f72f.jpg', 'https://www.facebook.com/hesham.nasr.319', 'https://www.linkedin.com/in/hesham-nasr-84bab6151/'],
			    [11, 'Mahmoud Khedr', 'Volunteer in HR Committee', 'images/volunteers/c942387d763c3ed409ceb63427dff1650a3d89ca.jpg', 'https://www.facebook.com/mahmoud.mostafa.790', 'https://www.linkedin.com/in/mahmoud-khedr-6660b5150/'],
			    [12, 'Mervat Mekky', 'Volunteer in HR Committee', 'images/volunteers/1497225819daadf0eb3dda2a2fa6b515213a0fbc.jpg', 'https://www.facebook.com/mervat.moamen', 'https://www.linkedin.com/in/mervat-mekky-192ab0151/'],
			    [13, 'Mostafa Tartosia', 'Volunteer in Logistics Commitee', 'images/volunteers/94fccfdf1ce373c76409e4cd2e6330f1559532fa.jpg', 'https://www.facebook.com/mostafa.tartosia', 'https://www.linkedin.com/in/mostafa-tartosia-80470014a/'],
			    [14, 'Nader Kamal', 'Volunteer in PR Committee', 'images/volunteers/fe14d3e6d9797b7dc3b642299dd81546f1fc0017.jpg', 'https://www.facebook.com/naderkamal.elian.9', 'https://www.linkedin.com/in/nader-alian-b90bb714a/'],
			    [15, 'Nesrine Tamer', 'Volunteer in PR Committee', 'images/volunteers/2b8f8dbea67c4ca28f4a2258c58de5a667eeb491.jpg', 'https://www.facebook.com/lifemylive', 'https://www.linkedin.com/in/nesrine-tamer-b118a2149/'],
			    [16, 'Elsayed Agamy', 'Head of Photography Commitee', 'images/volunteers/ebb7b167ebd8166fcaa3d91bd9c2cc0118a9c283.JPG', 'https://www.facebook.com/elsayedagamyofficial', 'https://www.linkedin.com/in/elsayed-agamy-5a801714b/'],
			    [17, 'Yasmin Amin', 'Volunteer in Logistics Commitee', 'images/volunteers/5a70e7a00ccb794770735223bb9b6c3ea1b19170.JPG', 'https://www.facebook.com/Yasmoz.Tigo', 'https://www.linkedin.com/in/yasmin-amin-46000214b/'],
			    [18, 'Ahmed Helmy', 'Vice-Head Media Committee', 'images/volunteers/a4533284a73a578c933669087355d10770af0e91.jpg', 'https://www.facebook.com/ahmed.helmy.73', '#'],
			    [20, 'Fares', 'Volunteer in Web Development Committee', 'images/volunteers/fccb908440af9db81bc28309962d17315a17b98d.jpg', 'https://www.facebook.com/ultim.warri', 'https://www.linkedin.com/in/fares-mostafa-4430a3164/'],
			    [21, 'Hana Mosaad', 'Volunteer in Logistics Commitee', 'images/volunteers/6bcdbcf2c6dffc9a2fb0991b0402ff9b03911e65.jpg', 'https://www.facebook.com/hana.mosaad.3', 'https://www.linkedin.com/in/hana-mosaad-943bb514a/'],
			    [22, 'Mena Naeem', 'Volunteer in Web Development Committee', 'images/volunteers/c370ea41292e48207a5ecb05f5fe7087f55e8632.jpg', 'https://www.facebook.com/profile.php?id=100016656370692', 'https://www.linkedin.com/in/mena-naeem-9bb156155/'],
			    [23, 'Mohamed Mostafa', 'Volunteer in Logistics Commitee', 'images/volunteers/2b38d801bae5334c2a9d6fcdd9faa495b826e193.jpg', 'https://www.facebook.com/profile.php?id=100004087954366', '#'],
			    [24, 'Rawan Saleh', 'Vice-Head PR Committee', 'images/volunteers/a72fc086a9eea35190115ba61bfd6029c4988c9a.jpg', 'https://www.facebook.com/profile.php?id=100010529106938', 'https://www.linkedin.com/in/rawan-saleh-a1300114b/'],
			    [25, 'Asfor', 'Volunteer in Finance & Fundraising Committee', 'images/volunteers/dd1926a4af63d2d5762edf5d811739d2341666a4.jpg', '#', '#'],
			    [26, 'Baha Hamed', 'Volunteer in Operations Committee', 'images/volunteers/fefc7ad0f31727afd00ed58deb36fd3bf2ad4054.jpg', '#', '#'],
			    [27, 'Eslam Adel', 'Vice Head of Registration Committee', 'images/volunteers/85d44d7e4f180f94841a748399e91784a7708469.jpg', 'https://www.facebook.com/es.adel98', 'https://www.linkedin.com/in/eslam-adel-364931154/'],
			    [28, 'Mohamed Alaa ', 'Volunteer in HR Committee', 'images/volunteers/2231a602a46a284fe1d7b3ca7ef13448d3379c3d.jpg', 'https://www.facebook.com/muhammed.alaa.77', '#'],
			    [30, 'Muhannad Mohamed', 'Volunteer in Operations Committee', 'images/volunteers/505178b4553ecdb9be7b798b4d0ebd52ee83dfea.jpg', 'https://www.facebook.com/muhannad.mohamed.96', 'https://www.linkedin.com/in/muhannad-mohamed-2745bb163'],
			    [31, 'Muhannad Mohamed ', 'Volunteer in PR Committee', 'images/volunteers/fdc21ab679c10f666ab34dd74627446cf414b118.jpg', 'https://www.facebook.com/MuhannadMoussa?fref=gc&dti=723568194436921', 'https://www.linkedin.com/in/muhannad-moussa-79bb12162/'],
			    [32, 'Nourai Sleem', 'Volunteer in HR Committee', 'images/volunteers/87139ef8f8a85d49c9f8eb56727419347c6b37cc.jpg', '#', '#'],
			    [33, 'Omar Adel', 'Volunteer in Photography Committee', 'images/volunteers/5a797ffbbbbf22e174dadee1b05834f09bb17182.jpg', 'https://www.facebook.com/profile.php?id=830466384&fref=gc&dti=723568194436921', 'https://www.linkedin.com/in/omar-adel-b51b11162/'],
			    [34, 'Raneem Zakaria', 'Volunteer in Registration Committee', 'images/volunteers/14a5f632f570c5c4f60b48e336c36c4d6dad9741.jpg', 'https://www.facebook.com/nem.nem.16568?fref=gc&dti=723568194436921', 'https://www.linkedin.com/in/raneem-zakaria-2350ab164/'],
			    [35, 'Yehia Ahmed ', 'Volunteer in PR Committee', 'images/volunteers/c6f9bcfc6c89a85c0b2c5a648148d77144352264.jpg', '#', '#'],
			    [36, 'Mohamed Bassam', 'Volunteer in Logistics Commitee', 'images/volunteers/30abab5bf29cf9563dc4791fd7210e0de3c1d002.jpg', 'https://www.facebook.com/medo.bassam1?fref=gc&dti=723568194436921', 'https://www.linkedin.com/in/mohamed-bassam-7605b7163/']
	    );
	    //
	    foreach($members as $member){
		    $team = new Team();
		    $team->name = $member[1];
		    $team->committee = $member[2];
		    $team->img = $member[3];
		    $team->facebook = $member[4];
		    $team->linkedin = $member[5];
		    $team->title = "volunteers";
		    $team->save();
	    }
    }
}
