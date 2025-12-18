



import React, { useState } from "react";

const FeedbackSystem = () => {
  const aspects = ["Readability", "Performance", "Security", "Documentation", "Testing"];

  const [feedback, setFeedback] = useState(
    aspects.map(() => ({ up: 0, down: 0 }))
  );

  const handleUpvote = (index) => {
    const updated = [...feedback];
    updated[index].up += 1;
    setFeedback(updated);
  };

  const handleDownvote = (index) => {
    const updated = [...feedback];
    updated[index].down += 1;
    setFeedback(updated);
  };

return(<>
 <div data-testid="feedback-system">
   
      <style>
        {`
          @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
          }
        `}
      </style>

{aspects.map((title, index) => ({
   <div className="my-0 mx-auto text-center w-mx-1200" key={index}></div>
}))}












 </div>





</>);

};

export default FeedbackSystem;