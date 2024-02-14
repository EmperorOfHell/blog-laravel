<div class="flex justify-end items-center">
    <div x-data="
	{
		rating: 0,
		hoverRating: 0,
		ratings: 5,
		rate(amount) {
			if (this.rating == amount) {
        this.rating = 0;
      }
			else this.rating = amount;
		},
	}
	"
         class="flex flex-col items-center justify-center"
    >
        <div class="flex space-x-0 ">
            <template x-for="(star, index) in ratings" :key="index">
                <button type="button" @click="rate(star)" @mouseover="hoverRating = star" @mouseleave="hoverRating = rating"
                        aria-hidden="true"
                        class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline w-4 m-0 cursor-pointer"
                        :class="{'text-gray-500':hoverRating >= star, 'text-purple-400': hoverRating >= star && rating>=star}">

                    <svg class="transition duration-100"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" >
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </button>
            </template>
            <svg width="0" height="0">
                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#b794f4" />
                    <stop offset="50%" style="stop-color:#ed64a6" />
                    <stop offset="100%" style="stop-color:#f56565" />
                </linearGradient>
            </svg>
        </div>
    </div>

</div>
