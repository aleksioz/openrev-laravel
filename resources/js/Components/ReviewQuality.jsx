import React from 'react';
import { Rating } from 'react-simple-star-rating';

export default function ReviewQuality({
	avgAssessment
}) {
	return (
		<div className="bg-white pt-2 dark:bg-gray-800 align-top shadow-md rounded-lg text-center">
			<h4 className="pt-0 font-semibold leading-tight text-gray-800 dark:text-gray-200">
				Review Quality
			</h4>
			<div className="">
				<Rating className="" initialValue={ avgAssessment } stars={5} allowFraction={true} size={15} /> &nbsp;&nbsp;&nbsp;
				<span className="text-gray-800 dark:text-gray-200">{avgAssessment ?? '-'}</span>
			</div>
		</div>
	)
}