<?php


use App\Note;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NoteExerciseTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     */
    public function test_notes_summary_and_notes_details()
    {
        $text = 'Begin of the note. Occaecati qui porro velit asperiores voluptas consequuntur soluta. Qui distinctio enim possimus. Aut nisi quisquam est a sint alias officiis cupiditate. Consequatur corrupti aut commodi consequatur hic quos quo qui. ';
        $text += 'End of the note.';

        Note::create(['note' => $text]);

        $this->visit('notes')
             ->see('Begin of the note')
             ->dontSee('End of the note')
             ->seeLink('View note')
             ->click('View note')
             ->see($text)
             ->seeLink('View all notes', 'notes');
    }
}
