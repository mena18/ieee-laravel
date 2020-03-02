<?php

use Illuminate\Database\Seeder;
use App\Gallery;
class GalleryDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	    $images = [[1, 'images/gallery/KwMt6XqMTdPgILpqU1LO_surrender-the-me-for-the-we-1.jpg', 'During the session.', 17],
[2, 'images/gallery/4OtSkDRJHfoipq7bBqKr_surrender-the-me-for-the-we-3.jpg', 'Our speaker during the session.', 17],
[3, 'images/gallery/oU5cIonbqaDozeZBt8Tu_surrender-the-me-for-the-we-7.jpg', 'Now let&#39;s write down our feedback.', 17],
[4, 'images/gallery/FxRP0EnM8MnsvQ4lduMt_focus-6.jpg', 'One of our instructors while giving the session.', 16],
[5, 'images/gallery/iWKzl8hAwEPFf2URY5uP_focus-5.jpg', 'Practice to get the most out of the experience.', 16],
[6, 'images/gallery/cjglJPDHChP6uTAyL4Fm_focus-4.jpg', 'When you see practically what to do you become more knowledgeable.', 16],
[7, 'images/gallery/2C5JJ3Sh2PIblfIRnKvS_focus-3.jpg', 'IEEE Photoghraphy session.', 16],
[8, 'images/gallery/2Y4w0O5CccxqQ3EfeaWb_focus-2.jpg', 'Photoghraphy is not only a DSLR camera, but also any camera even mobile camera.', 16],
[9, 'images/gallery/1tcLv81GgmcvIzfGAEwy_focus-1.jpg', 'A group of the attendees.', 16],
[10, 'images/gallery/fiGFDNxqvufTuZP63vj0_career-debate-9.jpg', 'Don&#39;t forget to Write down your notes.', 19],
[11, 'images/gallery/3sLututNzL2h6hquE3JN_career-debate-6.jpg', 'Our registration disk is ready to sign you up.', 19],
[12, 'images/gallery/34x6ffel8ZeMfLWhxq00_career-debate-5.jpg', 'A word by the dean of faculty of engineering at Pharos university.', 19],
[13, 'images/gallery/WO5oqVLx5PA5lLUAUoKh_career-debate-4.jpg', 'One of the attendees is participating.', 19],
[14, 'images/gallery/f3h258TafglTAp2XScq9_career-debate-3.jpg', 'The speakers of career debate event.', 19],
[15, 'images/gallery/kVWcQnz5h8ZcqB50LYDq_career-debate-1.jpg', 'A group of attendees at carrier debate event.', 19],
[16, 'images/gallery/N02SfldEpm2tDtpnlS25_black-seekers-6.jpg', 'A number of viewers who had came to attend the event.', 18],
[17, 'images/gallery/GvkbJiizuIb7tx3TF2PY_black-seekers-5.jpg', 'The event was attended by a number of university officials.', 18],
[18, 'images/gallery/6Tz4k2TynB5d6zHUAm1P_black-seekers-4.jpg', 'The robot is seeking the black line', 18],
[19, 'images/gallery/bGfpnZteGciFncPK3wvw_black-seekers-3.jpg', 'The final touches on the line tracking board.', 18],
[20, 'images/gallery/Tj46aRLmifOkMXiRVwf6_black-seekers-2.jpg', 'The Black Seekers IEEE PUA SB Board.', 18],
[21, 'images/gallery/zzCwsgiuGwMOChPDfby0_black-seekers-1.jpg', 'The line tracking board.', 18]];

	    foreach($images as $image) {
		    $img = new Gallery();
		    $img->url=$image[1];
		    $img->description=$image[2];
		    $img->event_id = $image[3];
		    $img->save();
	    }
    }
}
