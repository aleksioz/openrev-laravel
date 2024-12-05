import { useForm } from '@inertiajs/react';
import React, { useEffect, useRef } from 'react';
import { Rating } from 'react-simple-star-rating';
import { Tooltip } from 'react-tooltip';

export default function ReviewQuality({
	avgAssessment
}) {
	const hasMounted = useRef(false);
	const { data, setData, post } = useForm({avgAssessment});

	const handleRating = (rate) => {
		setData( {avgAssessment: rate} );
	}

	useEffect(() => {
		if(!hasMounted.current) {
			hasMounted.current = true;
		} else
			post(route('reviewquality.store'));
	}, [data]);
	
	return (
		<div data-tooltip-id="tooltip-instruction" data-tooltip-content="Click stars for your rating" className="bg-white pt-2 dark:bg-gray-800 align-top shadow-md rounded-lg text-center">
			<Tooltip id="tooltip-instruction" />
			<h4 className="pt-0 font-semibold leading-tight text-gray-800 dark:text-gray-200">
				Review Quality
			</h4>
			<div>
				<Rating onClick={handleRating} initialValue={ data.avgAssessment || '-' } stars={5} allowFraction={true} size={15} /> &nbsp;&nbsp;&nbsp;
				<span className="text-gray-800 dark:text-gray-200">{ data.avgAssessment ? data.avgAssessment.toFixed(2) : '-' }</span>
			</div>
		</div>
	)
}