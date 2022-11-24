@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="bg-[#e78c14]">
        {{-- Image Crash Logo --}}
        <div class="w-fit mx-auto pt-10">
            <img src="/img/crash-bandicoot.png" alt="crash-logo-1">
        </div>

        {{-- Image Crash Model --}}
        <div class="w-fit mx-auto">
            <img src="/img/crash-model.png" alt="crash-model-1">
        </div>

        {{-- Content --}}
        <div>

            <h1 class="text-5xl font-crashInsane text-center">" Whoa "</h1> <br>

            <div class="container mx-auto font-Montserrat p-2">

                <p>
                    <b>Crash Bandicoot</b> (Born in 1996) is the titular character and the main protagonist of the series of the same name. He is an Eastern barred bandicoot living in N. Sanity Island, who was captured and evolved by Dr. Neo Cortex. Throughout his adventures, Cortex is Crash's usual arch-enemy and is always defeated by Crash in order to keep peace on the island. Crash is often accompanied by his ally, Aku Aku, his younger sister, Coco Bandicoot, and their adopted brother, Crunch Bandicoot.
                </p>
                <br>
                <p>
                    Crash was originally designed by Charles Zembillas and Jason Rubin, and his original name was Willy the Wombat (alternatively spelt Willie). After rejected pushes from Universal Interactive Studios to name the character something more "family-friendly", such as "Wez", "Wuzzles" or "Wizzie the Wombat", Naughty Dog decided to name him "Crash" after his tendency to break crates, along with shuffling the species of a few characters to accommodate for Crash's recently-decided name.
                </p>
                
                <p>
                    In the end, the character Pinstripe's species (along that of with his goons) was changed from bandicoot to potoroo, and Crash's from wombat to bandicoot, though no design changes were made to either.
                </p>
                <br>

                <h1 class="text-2xl font-crashInsane py-5 md:absolute">Crash Bandicoot</h1>

                {{-- Text and Logo --}}
                <div class="md:flex md:justify-between md:space-x-10">
                    <p class="md:mt-14">
                        Crash began life as a simple, normal bandicoot, living freely as a wild animal in the jungles of N. Sanity island. He was captured by Neo Cortex, in order to be made the general of Cortex's Cortex Commandos, as part of his evil plan to conquer the world. He was mutated by Cortex and his right-hand-man, Nitrus Brio, with the Evolvo-Ray, which gave him human sapience and made him anthropomorphic, and proceeded with a nine-month training programme[1]. Despite Brio's warnings of the machine's unreliability, Cortex then sent Crash through the Cortex Vortex, a machine designed to make Crash into a genius and brainwash him into becoming 100% loyal to Cortex's every order. The machine failed just as Brio predicted and rejected Crash, allowing him to escape. Crash ends up running out of a window and falling down into the sea below. Angrily brushing off his failure, Cortex began repairs for the Cortex Vortex and moved on to the next candidate for brainwashing: Tawna Bandicoot, Crash's girlfriend.
                    </p>

                    {{-- Image --}}
                    <img class="mx-auto md:mx-0 w-40" src="/img/Crash1d.png" alt="crash-model-original">
                </div>

                <p class="py-5">
                    Some time later, Crash awoke dazed and lost on the shore of N. Sanity island. Determined to save Tawna and stop Cortex's plans of world domination, he set off on a quest to traverse the Wumpa Islands and reach Cortex Castle. Crash soon encounters a witch doctor mask, Aku Aku, who watches over him and protects him from various perils, and would soon grow a close, fatherly bond with Crash.
                    On Crash's adventure he confronts bosses who are determined to keep Crash from getting through. First was the obese tribe chief Papu Papu. Papu Papu was not affiliated with Cortex; he fought Crash because Crash woke him from a nap in his hut, angering him. Second was the insane kangaroo, Ripper Roo, Cortex's first failed experiment that he had abandoned in some ruins at the top of a waterfall. Next, the muscle-bound Koala Kong in a mine shaft. Cortex's bodyguard Pinstripe Potoroo came next, opening fire in his office in the Cortex Power refinery with his tommy gun. After Crash defeated him, Pinstripe accidentally fired into Cortex Power's generator, shutting down power production for Cortex's lair. Doctor Nitrus Brio is the penultimate boss, fought in his chemistry room. He attempted to fight Crash off with his chemical solutions at first, but has to resort to downing the brew himself, warping his body into the Brio Monster. After Crash defeats Brio, a bunsen burner from Brio's chemistry table is knocked over, setting the castle alight. Crash flees through the lab and makes it to The Great Hall, reaching the end of his quest.
                </p>

                <p>
                    Finally, at the end of the journey, Crash faces up against Cortex himself, on the top of Cortex's airship. Cortex, full of rage, curses Crash for ruining his plans, defeating his henchmen and destroying his lair. The two battle on the top of the airship; Cortex fires blasts of plasma at Crash with his ray gun from his hoverboard, only for Crash to deflect the bolts right back at Cortex by spinning them away. Soon Cortex's hoverboard is hit by one plasma blast too many, causing it to explode and send Cortex plummeting toward the ground far below. Crash happily reunites with Tawna on top of the airship and the two share a hug. Cortex is presumed dead, but evil geniuses are harder to squash than cockroaches...
                </p>

                {{-- Image --}}
                <div>
                    <img class="mx-auto" src="/img/crash-model2.png" alt="crash-model-2">
                </div>
            </div>
        </div>
    </div>
@endsection