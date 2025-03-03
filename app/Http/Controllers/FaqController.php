<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    function faqShow()
    {
        return view('faq.show');
    }

    function faqIndex() {
        $faq = $this->loadFaq();
//        dd($faq[0]['summary']);
        return view('faq.index', ['faq' => $faq]);
    }

    private function findFaq($id) {
        if ($id > count($this->loadFaq()) || $id < 1) {
            abort(404, "FAQ not found");
        } else {
            return $this->loadFaq()[$id - 1];
        }
    }

    private function loadFaq(): array
    {
        return [
            [
                'summary'=>'How can you print a document from your laptop at HZ?',
                'p'=>'Go to <a href="https://hz.mynetpay.nl/">https://hz.mynetpay.nl/</a>. Log in with your
                    school account (without @hz.nl).
                    You can upload a file at WebPrint or install the printer at MobilityPrint.
                    Please note! You need print credit to print.
                    For more information, go to the self-service portal.'
            ],
            [
            'summary'=>'How can you scan a document and send it to your laptop at HZ?',
            'p'=>'Go to a scanner/printer. Log in (with pass or username and password). Press
                Scan. If you want to scan double-sided, go to the settings and set the duplex
                mode to 2-sided. Put your papers where they belong and press Start. Then log out
                again
                (top right).'
            ],
            [
            'summary'=>'How can I buy something (like when I sign up for the IT introduction event) on
                the
                HZ web shop?',
            'p'=>'Go to <a href="https://webshop.hz.nl/">https://webshop.hz.nl/</a>. Log in. Then find
                the
                product you want to buy,
                select the
                option you want (e.g. color, size, quantity) and then press Add to cart.
    Then go
                to SHOPPING CART at the top. Then press checkout. Choose your payment method. Press
                Next
                and follow the instructions on your screen.',],
            [
                'summary'=>'How can you book a project space?',
                'p'=>'To book a project space:
                <ol>
                    <li>visit <a href="https://portal.hz.nl/">portal.hz.nl</a></li>
                    <li>then navigate to
                <ol>
                            <li>Selfservice Portal,</li>
                            <li>reservations,</li>
                            <li>Book a project or meeting space,</li>
                            <li>Book a space,</li>
                        </ol>
                    </li>
                    <li>Then find a room with a timeslot that suits your needs. Select the timeslot.
                    </li>
                    <li>Fill in your group name, number of people, and perhaps some optional extra
                        details.
                    </li>
                    <li>Press next.</li>
                    <li>Press confirm.</li>
                </ol>'
            ],
            [
                    'summary'=>'What are the instructions if you want to park your car at the HZ parking
                        lot?',
                    'p'=>'It is not possible to park directly at the HZ at Het Groene Woud. There is a special
                        parking space available on the premises for people with disabilities and/or chronic
                        conditions.
                        In the parking garage at the Kousteensedijk there are a number of spaces for
            visitors,
            employees and
            students of Het Groene Woud. This parking garage is an 8-minute walk from the
                        HZ. Upon presentation of your entry ticket, you can obtain an exit ticket at the
                        JRCZ
                        service desk.']
        ];
    }
}
