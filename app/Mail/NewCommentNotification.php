<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Message;
use Illuminate\Mail\Mailables\Address;


class NewCommentNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $comment;
    
    
    /**
     * Create a new message instance.
     * @param Comment $comment
     * @param User $user
     */
    public function __construct(Comment $comment, User $user)
    {
        $this->user = $user;
        $this->comment = $comment;        
    }
    //dd($user)
    /**
     * Get the message envelope.
     * @param mixed $notifiable
     * @return array
     */
    

    /**
     * Get the message content definition.
     */
                                 
            
    public function build()
    {
        return $this->from($this->user->email)
                    ->view('emails.new_comment_notification')
                    ->with([
                        'name'=>$this->user->name,
                        'email'=>$this->user->email,
                        'subject'=>$this->comment->subject,
                        'comment'=>$this->comment->content,            
                    ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
