<?php

namespace Model;

/**
 * Class AnswerModel
 */
class AnswerModel
{
    /**
     * @var RiskModel[]
     */
    private $riskAnswers;

    /**
     * @var MeasureModel[]
     */
    private $measureAnswers;

    /**
     * @var TechniqueModel[]
     */
    private $techniqueAnswers;

    /**
     * RiskAnswers getter.
     *
     * @return RiskModel[]|null
     */
    public function getRiskAnswers(): ?array
    {
        return $this->riskAnswers;
    }

    /**
     * RiskAnswers setter.
     *
     * @param RiskModel[]|null $riskAnswers
     *
     * @return $this
     */
    public function setRiskAnswers(?array $riskAnswers): AnswerModel
    {
        $this->riskAnswers = $riskAnswers;

        return $this;
    }

    /**
     * MeasureAnswers getter.
     *
     * @return MeasureModel[]|null
     */
    public function getMeasureAnswers(): ?array
    {
        return $this->measureAnswers;
    }

    /**
     * MeasureAnswers setter.
     *
     * @param MeasureModel[]|null $measureAnswers
     *
     * @return $this
     */
    public function setMeasureAnswers(?array $measureAnswers): AnswerModel
    {
        $this->measureAnswers = $measureAnswers;

        return $this;
    }

    /**
     * TechniqueAnswers getter.
     *
     * @return TechniqueModel[]|null
     */
    public function getTechniqueAnswers(): ?array
    {
        return $this->techniqueAnswers;
    }

    /**
     * TechniqueAnswers setter.
     *
     * @param TechniqueModel[]|null $techniqueAnswers
     *
     * @return $this
     */
    public function setTechniqueAnswers(?array $techniqueAnswers): AnswerModel
    {
        $this->techniqueAnswers = $techniqueAnswers;

        return $this;
    }

    /**
     * @return array
     */
    public function getRisksSymbols(): array
    {
        $symbols = [];
        foreach ($this->riskAnswers as $riskAnswer) {
            if ($riskAnswer->getAnswer()) {
                $symbols[] = sprintf('D%d', $riskAnswer->getId());
            }
        }

        return $symbols;
    }

    /**
     * @return array
     */
    public function getMeasuresSymbols(): array
    {
        $symbols = [];
        foreach ($this->measureAnswers as $measureAnswer) {
            if ($measureAnswer->getAnswer()) {
                $symbols[] = sprintf('O%d', $measureAnswer->getId());
            }
        }

        return $symbols;
    }

    /**
     * @return array
     */
    public function getTechniquesSymbols(): array
    {
        $symbols = [];
        foreach ($this->techniqueAnswers as $techniqueAnswer) {
            if ($techniqueAnswer->getAnswer()) {
                $symbols[] = sprintf('T%d', $techniqueAnswer->getId());
            }
        }

        return $symbols;
    }
}